<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AA3\AtracAudio;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AA332Kbitss44100HzMono extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::ATRAC_AUDIO;
    }

    public function getTemplateName(): string
    {
        return '32 Kbits/s, 44 100 Hz, Mono';
    }
}
