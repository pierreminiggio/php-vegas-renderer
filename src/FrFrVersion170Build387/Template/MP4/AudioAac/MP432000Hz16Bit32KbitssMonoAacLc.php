<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\AudioAac;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP432000Hz16Bit32KbitssMonoAacLc extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::AUDIO_AAC;
    }

    public function getTemplateName(): string
    {
        return '32 000 Hz; 16 Bit; 32 Kbits/s, Mono, AAC LC';
    }
}
