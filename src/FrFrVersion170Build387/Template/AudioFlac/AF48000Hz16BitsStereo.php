<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AudioFlac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AF48000Hz16BitsStereo extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_FLAC;
    }

    public function getTemplateName(): string
    {
        return '48 000 Hz; 16 bits; Stéréo';
    }
}
