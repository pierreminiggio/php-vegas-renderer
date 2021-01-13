<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP3\AudioMp3;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP3AudioVbrStereoDeQualiteMoyenne extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_MP3;
    }

    public function getTemplateName(): string
    {
        return 'Audio VBR stéréo de qualité moyenne';
    }
}
