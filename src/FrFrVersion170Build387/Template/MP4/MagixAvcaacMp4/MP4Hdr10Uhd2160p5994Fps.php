<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\MagixAvcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4Hdr10Uhd2160p5994Fps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_AVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'HDR10 UHD 2160p 59.94 fps';
    }
}
