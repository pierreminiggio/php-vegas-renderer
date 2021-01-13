<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\W64\SonyWave64;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class W6496000Hz24Bit51Pcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_WAVE64;
    }

    public function getTemplateName(): string
    {
        return '96 000 Hz; 24 Bit; 5.1, PCM';
    }
}
