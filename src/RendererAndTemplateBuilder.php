<?php

namespace PierreMiniggio\VegasRenderer;

use Illuminate\Support\Str;

class RendererAndTemplateBuilder
{
    public function buildFiles(string $vegasPath): void
    {

        shell_exec(
            '"'
            . $vegasPath
            . '" -SCRIPT:"'
            . __DIR__
            . DIRECTORY_SEPARATOR
            . '..'
            . DIRECTORY_SEPARATOR
            . 'ShellRenderProject'
            . DIRECTORY_SEPARATOR
            . 'ShellRenderProject'
            . DIRECTORY_SEPARATOR
            . 'PHPTemplateBuilder.cs'
            . '"'
        );

        $fileContent = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'renderers.json');
        $jsonContent = json_decode($fileContent, true);
        
        $versionDir = $this->pascalize($jsonContent['locale'] . ' ' . $jsonContent['version']);
        
        $srcDir = __DIR__ . DIRECTORY_SEPARATOR;
        $mainDir = $srcDir . $versionDir;

        if (! file_exists($mainDir)) {
            mkdir($mainDir);
        }

        $pierreMiniggioNamespace = 'PierreMiniggio\\VegasRenderer\\';
        $namespace = $pierreMiniggioNamespace . $versionDir;

        $rawRenderers = $jsonContent['renderers'];
        $rendererEnumClassname = 'RendererEnum';
        $this->createRendererEnumFile($mainDir, $namespace, $rendererEnumClassname, $rawRenderers);
        $this->createTemplates($mainDir, $pierreMiniggioNamespace, $namespace, $rendererEnumClassname, $rawRenderers);
    }

    private function createRendererEnumFile(
        string $mainDir,
        string $namespace,
        string $classname,
        array $rawRenderers
    ): void
    {

        $rendererConstants = [];

        foreach ($rawRenderers as $rawRenderer) {
            $rawRendererName = $rawRenderer['name'];
            $rendererConstants[] = 'public const '
                . $this->screamCasealize($rawRendererName)
                . ' = '
                . '\''
                . str_replace('\'', '\\\'', $rawRendererName)
                . '\';'
            ;
        }

        $fileContent = '<?php

namespace ' . $namespace . ';

class ' . $classname . '
{
    ' . implode(PHP_EOL . '    ', $rendererConstants) . '
}
';
        file_put_contents($mainDir . DIRECTORY_SEPARATOR . $classname . '.php', $fileContent);
    }

    public function createTemplates(
        string $mainDir,
        string $pierreMiniggioNamespace,
        string $versionNamespace,
        string $rendererEnumClassname,
        array $rawRenderers
    ): void
    {
        $abstractTemplateClassname = 'Template';

        $templateDir = $mainDir . DIRECTORY_SEPARATOR . 'Template';

        if (! file_exists($templateDir)) {
            mkdir($templateDir);
        }

        foreach ($rawRenderers as $rawRenderer) {

            $rawExtension = $rawRenderer['extension'];
            $extensionPSR4Name = strtoupper(str_replace('*.', '', $rawExtension));
            $extensionDir = $templateDir . DIRECTORY_SEPARATOR . $extensionPSR4Name;

            if (! file_exists($extensionDir)) {
                mkdir($extensionDir);
            }

            $rawRendererName = $rawRenderer['name'];
            $constantName = $this->screamCasealize($rawRendererName);
            $rendererPSR4Name = $this->pascalize($rawRendererName);
            $rendererDir = $extensionDir . DIRECTORY_SEPARATOR . $rendererPSR4Name;

            if (! file_exists($rendererDir)) {
                mkdir($rendererDir);
            }
            
            foreach ($rawRenderer['templates'] as $template) {
                if (empty($template)) {
                    continue;
                }

                $templateClass = $extensionPSR4Name . $this->pascalize($template);
                $templateFileName = $rendererDir . DIRECTORY_SEPARATOR . $templateClass . '.php';
                file_put_contents($templateFileName, '<?php

namespace ' . $versionNamespace . '\\Template\\' . $extensionPSR4Name . '\\' . $rendererPSR4Name . ';

use ' . $versionNamespace . '\\' . $rendererEnumClassname . ';
use ' . $pierreMiniggioNamespace . $abstractTemplateClassname . ';

class ' . $templateClass . ' extends ' . $abstractTemplateClassname . '
{
    public function getRendererName(): string
    {
        return ' . $rendererEnumClassname . '::' . $constantName . ';
    }

    public function getTemplateName(): string
    {
        return \'' . str_replace('\'', '\\\'', $template) . '\';
    }
}
');
            }
        }
    }

    private function pascalize(string $input): string
    {
        $output = '';
        $split = explode('-', Str::slug($input));

        foreach ($split as $word) {
            $output .= ucfirst($word);
        }

        return $output;
    }

    private function screamCasealize(string $input): string
    {
        return implode(
            '_',
            array_map(
                fn ($word) => strtoupper($word),
                explode('-', Str::slug($input))
            )
        );
    }
}
