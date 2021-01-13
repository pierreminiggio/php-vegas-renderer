<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WAV\WaveMicrosoft;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WAVModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WAVE_MICROSOFT;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
