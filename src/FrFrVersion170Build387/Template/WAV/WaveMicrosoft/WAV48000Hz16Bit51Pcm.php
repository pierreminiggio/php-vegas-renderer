<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WAV\WaveMicrosoft;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WAV48000Hz16Bit51Pcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WAVE_MICROSOFT;
    }

    public function getTemplateName(): string
    {
        return '48 000 Hz; 16 Bit; 5.1, PCM';
    }
}
