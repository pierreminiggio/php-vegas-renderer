<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AudioAac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AA44100Hz16Bit256KbitssStereoAacLc extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_AAC;
    }

    public function getTemplateName(): string
    {
        return '44 100 Hz; 16 Bit; 256 Kbits/s, Stéréo, AAC LC';
    }
}
