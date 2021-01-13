<?php

namespace PierreMiniggio\VegasRenderer;

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
    }
}