<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WMV\WindowsMediaVideoV11;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class WMVVideoHaute extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::WINDOWS_MEDIA_VIDEO_V11;
    }

    public function getTemplateName(): string
    {
        return 'Vidéo haute';
    }
}
