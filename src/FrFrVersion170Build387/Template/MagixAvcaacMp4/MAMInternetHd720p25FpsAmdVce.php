<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MagixAvcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MAMInternetHd720p25FpsAmdVce extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_AVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'Internet HD 720p 25 fps (AMD VCE)';
    }
}