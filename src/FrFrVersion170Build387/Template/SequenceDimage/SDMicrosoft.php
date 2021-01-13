<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\SequenceDimage;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class SDMicrosoft extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::SEQUENCE_DIMAGE;
    }

    public function getTemplateName(): string
    {
        return 'Microsoft';
    }
}
