<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\IntelHevc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4Hevc1920x108024p12Mbps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::INTEL_HEVC;
    }

    public function getTemplateName(): string
    {
        return 'HEVC 1920x1080-24p 12 Mbps';
    }
}
