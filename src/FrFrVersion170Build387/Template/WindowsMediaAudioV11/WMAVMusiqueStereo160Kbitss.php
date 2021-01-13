<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WindowsMediaAudioV11;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WMAVMusiqueStereo160Kbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WINDOWS_MEDIA_AUDIO_V11;
    }

    public function getTemplateName(): string
    {
        return 'Musique stéréo 160 Kbits/s';
    }
}
