<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\PCA\SonyPca;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class PCA44100Hz16BitsMono extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_PCA;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 16 bits; mono';
    }
}
