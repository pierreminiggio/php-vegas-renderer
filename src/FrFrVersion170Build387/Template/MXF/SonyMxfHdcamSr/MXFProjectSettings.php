<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MXF\SonyMxfHdcamSr;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MXFProjectSettings extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SONY_MXF_HDCAM_SR;
    }

    public function getTemplateName(): string
    {
        return 'Project Settings';
    }
}
