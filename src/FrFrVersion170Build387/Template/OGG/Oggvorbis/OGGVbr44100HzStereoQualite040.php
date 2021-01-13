<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\OGG\Oggvorbis;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class OGGVbr44100HzStereoQualite040 extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::OGGVORBIS;
    }

    public function getTemplateName(): string
    {
        return 'VBR, 44 100 Hz, Stéréo, Qualité 0,40';
    }
}
