<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\OGG\Oggvorbis;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class OGG96Kbits44100HzMono extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::OGGVORBIS;
    }

    public function getTemplateName(): string
    {
        return '96 Kbit/s, 44 100 Hz, Mono';
    }
}
