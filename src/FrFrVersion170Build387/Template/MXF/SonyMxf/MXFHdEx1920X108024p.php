<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MXF\SonyMxf;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MXFHdEx1920X108024p extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_MXF;
    }

    public function getTemplateName(): string
    {
        return 'HD EX 1920 x 1080-24p';
    }
}
