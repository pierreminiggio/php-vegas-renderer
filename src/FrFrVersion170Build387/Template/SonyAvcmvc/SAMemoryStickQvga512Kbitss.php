<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SAMemoryStickQvga512Kbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'Memory Stick QVGA - 512 Kbits/s';
    }
}
