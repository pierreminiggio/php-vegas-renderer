<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyWave64;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SW44100Hz32BitIeeeFloatStereoPcmFloat extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_WAVE64;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 32 Bit (IEEE Float); Stereo, PCM (float)';
    }
}
