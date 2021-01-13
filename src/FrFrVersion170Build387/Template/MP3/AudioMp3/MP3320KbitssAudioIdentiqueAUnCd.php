<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP3\AudioMp3;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP3320KbitssAudioIdentiqueAUnCd extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_MP3;
    }

    public function getTemplateName(): string
    {
        return '320 Kbits/s, audio identique à un CD';
    }
}
