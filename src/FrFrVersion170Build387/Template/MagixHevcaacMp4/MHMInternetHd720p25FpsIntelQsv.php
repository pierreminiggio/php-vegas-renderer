<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MagixHevcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MHMInternetHd720p25FpsIntelQsv extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_HEVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'Internet HD 720p 25 fps (Intel QSV)';
    }
}