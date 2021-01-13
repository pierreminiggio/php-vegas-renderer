<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\FLAC\AudioFlac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class FLAC44100Hz16BitsMono extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_FLAC;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 16 bits; Mono';
    }
}
