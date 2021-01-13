<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\VideoPourWindows;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class VPWHd108024pYuv extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::VIDEO_POUR_WINDOWS;
    }

    public function getTemplateName(): string
    {
        return 'HD 1080-24p YUV';
    }
}
