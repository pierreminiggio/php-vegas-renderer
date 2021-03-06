<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\XdcamEx;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4Hq1920x108050i35MbitssVbr extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::XDCAM_EX;
    }

    public function getTemplateName(): string
    {
        return 'HQ 1920x1080-50i, 35 Mbits/s VBR';
    }
}
