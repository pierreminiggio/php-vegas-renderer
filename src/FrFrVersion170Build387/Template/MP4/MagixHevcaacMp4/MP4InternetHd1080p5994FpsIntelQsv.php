<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\MagixHevcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4InternetHd1080p5994FpsIntelQsv extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_HEVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'Internet HD 1080p 59.94 fps (Intel QSV)';
    }
}