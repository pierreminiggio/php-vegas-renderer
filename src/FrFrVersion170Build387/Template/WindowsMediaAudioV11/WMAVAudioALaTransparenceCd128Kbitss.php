<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WindowsMediaAudioV11;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WMAVAudioALaTransparenceCd128Kbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WINDOWS_MEDIA_AUDIO_V11;
    }

    public function getTemplateName(): string
    {
        return 'Audio à la transparence CD 128 Kbits/s';
    }
}
