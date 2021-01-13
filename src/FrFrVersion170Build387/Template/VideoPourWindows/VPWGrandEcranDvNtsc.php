<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\VideoPourWindows;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class VPWGrandEcranDvNtsc extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::VIDEO_POUR_WINDOWS;
    }

    public function getTemplateName(): string
    {
        return 'Grand écran DV NTSC';
    }
}
