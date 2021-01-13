<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MagixAvcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MAMHdr10Uhd2160p50Fps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_AVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'HDR10 UHD 2160p 50 fps';
    }
}
