<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\MPG\MainconceptMpeg2;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class MPGFluxVideoNtscDvdArchitect extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::MAINCONCEPT_MPEG_2;
    }

    public function getTemplateName(): string
    {
        return 'Flux vidéo NTSC DVD Architect';
    }
}
