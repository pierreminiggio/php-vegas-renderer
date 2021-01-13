<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\IntelHevc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4Hevc3840x21602997p40Mbps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::INTEL_HEVC;
    }

    public function getTemplateName(): string
    {
        return 'HEVC 3840x2160-29,97p 40 Mbps';
    }
}
