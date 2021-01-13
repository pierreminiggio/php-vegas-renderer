<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AudioMp3;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AM64KbitssAudioDeQualiteRadioFm extends Template
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
