<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AudioFlac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AF22050Hz16BitsMono extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_FLAC;
    }

    public function getTemplateName(): string
    {
        return '22 050 Hz; 16 bits; Mono';
    }
}
