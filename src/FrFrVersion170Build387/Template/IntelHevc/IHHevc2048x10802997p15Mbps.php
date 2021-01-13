<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\IntelHevc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class IHHevc2048x10802997p15Mbps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::INTEL_HEVC;
    }

    public function getTemplateName(): string
    {
        return 'HEVC 2048x1080-29,97p 15 Mbps';
    }
}
