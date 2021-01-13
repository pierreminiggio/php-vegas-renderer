<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\XdcamEx;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class XEModeleParDefaut extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::XDCAM_EX;
    }

    public function getTemplateName(): string
    {
        return 'Modèle par défaut';
    }
}
