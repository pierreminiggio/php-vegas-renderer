<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MXF\SonyXavcXavcS;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MXFXavcIntra4096X216050p extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_XAVC_XAVC_S;
    }

    public function getTemplateName(): string
    {
        return 'XAVC Intra 4096 x 2160-50p';
    }
}
