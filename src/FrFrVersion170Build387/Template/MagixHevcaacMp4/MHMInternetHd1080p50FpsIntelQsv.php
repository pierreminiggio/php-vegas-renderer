<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MagixHevcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MHMInternetHd1080p50FpsIntelQsv extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_HEVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'Internet HD 1080p 50 fps (Intel QSV)';
    }
}