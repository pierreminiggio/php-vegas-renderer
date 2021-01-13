<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MagixHevcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MHMHlgHd1080p25Fps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_HEVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'HLG HD 1080p 25 fps';
    }
}
