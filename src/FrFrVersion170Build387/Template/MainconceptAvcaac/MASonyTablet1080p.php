<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MainconceptAvcaac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MASonyTablet1080p extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAINCONCEPT_AVCAAC;
    }

    public function getTemplateName(): string
    {
        return 'Sony Tablet 1080p';
    }
}
