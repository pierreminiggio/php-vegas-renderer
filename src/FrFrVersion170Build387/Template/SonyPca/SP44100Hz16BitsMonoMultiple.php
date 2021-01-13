<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyPca;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SP44100Hz16BitsMonoMultiple extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_PCA;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 16 bits; mono (multiple)';
    }
}
