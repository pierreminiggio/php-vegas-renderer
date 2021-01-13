<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\FLAC\AudioFlac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class FLAC96000Hz24BitsStereo extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_FLAC;
    }

    public function getTemplateName(): string
    {
        return '96 000 Hz; 24 bits; Stéréo';
    }
}
