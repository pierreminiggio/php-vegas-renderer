<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WMA\WindowsMediaAudioV11;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WMAAudioDeQualiteCd128KbitssSurround51 extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WINDOWS_MEDIA_AUDIO_V11;
    }

    public function getTemplateName(): string
    {
        return 'Audio de qualité CD 128 Kbits/s, Surround 5.1';
    }
}
