<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MXF\SonyMxf;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MXFGrandEcranNtscDv24p extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_MXF;
    }

    public function getTemplateName(): string
    {
        return 'Grand écran NTSC DV 24p';
    }
}
