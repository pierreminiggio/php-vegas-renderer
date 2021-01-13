<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WaveMicrosoft;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WM48000Hz32BitIeeeFlottant51PcmFlottant extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WAVE_MICROSOFT;
    }

    public function getTemplateName(): string
    {
        return '48 000 Hz; 32 Bit (IEEE flottant); 5.1, PCM (flottant)';
    }
}
