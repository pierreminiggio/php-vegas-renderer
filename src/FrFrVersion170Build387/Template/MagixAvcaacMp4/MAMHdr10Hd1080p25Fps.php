<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MagixAvcaacMp4;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MAMHdr10Hd1080p25Fps extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAGIX_AVCAAC_MP4;
    }

    public function getTemplateName(): string
    {
        return 'HDR10 HD 1080p 25 fps';
    }
}
