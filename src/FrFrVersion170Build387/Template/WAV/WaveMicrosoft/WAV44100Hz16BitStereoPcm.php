<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WAV\WaveMicrosoft;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WAV44100Hz16BitStereoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WAVE_MICROSOFT;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 16 Bit; Stéréo, PCM';
    }
}
