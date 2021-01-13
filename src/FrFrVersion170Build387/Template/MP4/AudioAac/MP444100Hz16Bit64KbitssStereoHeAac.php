<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\AudioAac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP444100Hz16Bit64KbitssStereoHeAac extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_AAC;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 16 Bit; 64 Kbits/s, Stéréo, HE-AAC';
    }
}
