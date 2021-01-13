<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\VideoPourWindows;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class VPWGrandEcranNtscDv24p extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::VIDEO_POUR_WINDOWS;
    }

    public function getTemplateName(): string
    {
        return 'Grand écran NTSC DV 24p';
    }
}
