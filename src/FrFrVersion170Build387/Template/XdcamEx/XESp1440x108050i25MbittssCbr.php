<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\XdcamEx;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class XESp1440x108050i25MbittssCbr extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::XDCAM_EX;
    }

    public function getTemplateName(): string
    {
        return 'SP 1440x1080-50i, 25 Mbitts/s CBR';
    }
}
