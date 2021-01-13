<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MXF\SonyMxf;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MXFHd1440X108025p extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_MXF;
    }

    public function getTemplateName(): string
    {
        return 'HD 1440 x 1080-25p';
    }
}
