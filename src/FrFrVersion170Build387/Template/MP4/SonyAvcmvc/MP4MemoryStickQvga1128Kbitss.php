<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MP4\SonyAvcmvc;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MP4MemoryStickQvga1128Kbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_AVCMVC;
    }

    public function getTemplateName(): string
    {
        return 'Memory Stick QVGA - 1128 Kbits/s';
    }
}
