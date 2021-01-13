<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AtracAudio;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AA128Kbitss44100HzStereoSansPerte extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::ATRAC_AUDIO;
    }

    public function getTemplateName(): string
    {
        return '128 Kbits/s, 44 100 Hz, Stéréo, sans perte';
    }
}
