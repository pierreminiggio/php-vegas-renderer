<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AA3\AtracAudio;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AA3512Kbitss44100Hz51 extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::ATRAC_AUDIO;
    }

    public function getTemplateName(): string
    {
        return '512 Kbits/s, 44 100 Hz, 5.1';
    }
}
