<?php

namespace PierreMiniggio\VegasRenderer;

abstract class Template
{
    abstract public function getRendererName(): string;
    abstract public function getTemplateName(): string;
}
