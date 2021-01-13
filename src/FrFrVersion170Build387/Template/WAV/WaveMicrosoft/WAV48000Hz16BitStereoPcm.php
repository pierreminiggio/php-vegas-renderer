<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WAV\WaveMicrosoft;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WAV48000Hz16BitStereoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WAVE_MICROSOFT;
    }

    public function getTemplateName(): string
    {
        return '48 000 Hz; 16 Bit; Stéréo, PCM';
    }
}
