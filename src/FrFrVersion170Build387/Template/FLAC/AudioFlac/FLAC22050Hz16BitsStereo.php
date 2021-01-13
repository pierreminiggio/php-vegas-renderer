<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\FLAC\AudioFlac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class FLAC22050Hz16BitsStereo extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_FLAC;
    }

    public function getTemplateName(): string
    {
        return '22 050 Hz; 16 bits; Stéréo';
    }
}
