<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyWave64;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SW48000Hz16BitStereoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_WAVE64;
    }

    public function getTemplateName(): string
    {
        return '48 000 Hz; 16 Bit; Stéréo, PCM';
    }
}
