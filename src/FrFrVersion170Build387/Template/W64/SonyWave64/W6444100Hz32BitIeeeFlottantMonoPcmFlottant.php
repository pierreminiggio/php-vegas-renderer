<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\W64\SonyWave64;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class W6444100Hz32BitIeeeFlottantMonoPcmFlottant extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_WAVE64;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 32 Bit (IEEE flottant); Mono, PCM (flottant)';
    }
}
