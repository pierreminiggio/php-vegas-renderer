<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AudioFlac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AFModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_FLAC;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
