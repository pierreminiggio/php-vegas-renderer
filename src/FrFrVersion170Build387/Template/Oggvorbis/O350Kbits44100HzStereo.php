<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\Oggvorbis;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class O350Kbits44100HzStereo extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::OGGVORBIS;
    }

    public function getTemplateName(): string
    {
        return '350 Kbit/s, 44 100 Hz, Stéréo';
    }
}
