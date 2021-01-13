<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\IntelHevc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class IHHevc3840x216025p40Mbps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::INTEL_HEVC;
    }

    public function getTemplateName(): string
    {
        return 'HEVC 3840x2160-25p 40 Mbps';
    }
}
