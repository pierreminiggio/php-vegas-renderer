<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\IntelHevc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4Hevc2048x108024p15Mbps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::INTEL_HEVC;
    }

    public function getTemplateName(): string
    {
        return 'HEVC 2048x1080-24p 15 Mbps';
    }
}
