<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP3\AudioMp3;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP364KbitssAudioDeQualiteRadioFm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_MP3;
    }

    public function getTemplateName(): string
    {
        return '64 Kbits/s, audio de qualité radio FM';
    }
}
