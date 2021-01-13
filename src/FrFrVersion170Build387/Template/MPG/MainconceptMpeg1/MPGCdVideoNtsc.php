<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MPG\MainconceptMpeg1;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MPGCdVideoNtsc extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAINCONCEPT_MPEG_1;
    }

    public function getTemplateName(): string
    {
        return 'CD vidéo NTSC';
    }
}
