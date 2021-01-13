<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\OGG\Oggvorbis;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class OGG350Kbits48000HzStereo extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::OGGVORBIS;
    }

    public function getTemplateName(): string
    {
        return '350 Kbit/s, 48 000 Hz, Stéréo';
    }
}
