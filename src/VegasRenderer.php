<?php

namespace PierreMiniggio\VegasRenderer;

class VegasRenderer
{

    private string $vegasPath;

    public function __construct(string $vegasPath)
    {
        $this->vegasPath = $vegasPath;
    }

    /**
     * @throws FailedRenderException
     * 
     * @return void
     */
    public function render(
        string $projectFilePath,
        Template $template,
        string $outputFilePath
    )
    {
        $argsStr = null;

        $args = [
            'projectFilePath' => $projectFilePath,
            'rendererName' => $template->getRendererName(),
            'templateName' => $template->getTemplateName(),
            'outputFilePath' => $outputFilePath
        ];

        foreach ($args as $argName => $argValue) {
            $argsStr .= ($argsStr === null ? '?' : '&') . $argName . '=' . $argValue;
        }

        if (file_exists($outputFilePath)) {
            unlink($outputFilePath);
        }

        shell_exec(
            '"'
            . $this->vegasPath
            . '" -SCRIPT:"'
            . __DIR__
            . DIRECTORY_SEPARATOR
            . '..'
            . DIRECTORY_SEPARATOR
            . 'ShellRenderProject'
            . DIRECTORY_SEPARATOR
            . 'ShellRenderProject'
            . DIRECTORY_SEPARATOR
            . 'Class1.cs'
            . $argsStr
            . '"'
        );

        if (! file_exists($outputFilePath)) {
            throw new FailedRenderException();
        }
    }
}