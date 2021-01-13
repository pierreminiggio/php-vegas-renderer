<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WaveMicrosoft;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WM44100Hz32BitIeeeFlottantMonoPcmFlottant extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WAVE_MICROSOFT;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 32 Bit (IEEE flottant); Mono, PCM (flottant)';
    }
}
