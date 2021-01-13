<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\XdcamEx;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class XESp1440x108060i25MbitssCbr extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::XDCAM_EX;
    }

    public function getTemplateName(): string
    {
        return 'SP 1440x1080-60i, 25 Mbits/s CBR';
    }
}
