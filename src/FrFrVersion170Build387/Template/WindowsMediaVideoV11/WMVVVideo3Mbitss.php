<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WindowsMediaVideoV11;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WMVVVideo3Mbitss extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WINDOWS_MEDIA_VIDEO_V11;
    }

    public function getTemplateName(): string
    {
        return 'Vidéo 3 Mbits/s';
    }
}
