<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MXF\SonyMxf;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MXFPalMpegImx50 extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_MXF;
    }

    public function getTemplateName(): string
    {
        return 'PAL MPEG IMX 50';
    }
}
