<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WaveMicrosoft;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WM48000Hz24BitStereoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WAVE_MICROSOFT;
    }

    public function getTemplateName(): string
    {
        return '48 000 Hz; 24 Bit; Stéréo, PCM';
    }
}
