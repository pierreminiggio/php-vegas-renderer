<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyMxf;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SMNtscMpegImx50GrandEcran extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_MXF;
    }

    public function getTemplateName(): string
    {
        return 'NTSC MPEG IMX 50 Grand écran';
    }
}
