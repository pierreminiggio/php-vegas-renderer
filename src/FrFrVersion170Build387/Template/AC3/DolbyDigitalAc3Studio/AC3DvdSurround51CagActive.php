<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AC3\DolbyDigitalAc3Studio;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AC3DvdSurround51CagActive extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::DOLBY_DIGITAL_AC_3_STUDIO;
    }

    public function getTemplateName(): string
    {
        return 'DVD surround 5.1, CAG activé';
    }
}
