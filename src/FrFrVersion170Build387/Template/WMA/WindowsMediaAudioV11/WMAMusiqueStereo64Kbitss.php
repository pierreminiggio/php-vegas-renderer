<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WMA\WindowsMediaAudioV11;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WMAMusiqueStereo64Kbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WINDOWS_MEDIA_AUDIO_V11;
    }

    public function getTemplateName(): string
    {
        return 'Musique stéréo 64 Kbits/s';
    }
}
