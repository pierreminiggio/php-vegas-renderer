<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AA3\AtracAudio;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AA364Kbitss44100HzStereo extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::ATRAC_AUDIO;
    }

    public function getTemplateName(): string
    {
        return '64 Kbits/s, 44 100 Hz, Stéréo';
    }
}
