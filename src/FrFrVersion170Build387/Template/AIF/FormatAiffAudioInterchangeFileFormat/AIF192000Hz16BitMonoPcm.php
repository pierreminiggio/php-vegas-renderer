<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AIF\FormatAiffAudioInterchangeFileFormat;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AIF192000Hz16BitMonoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::FORMAT_AIFF_AUDIO_INTERCHANGE_FILE_FORMAT;
    }

    public function getTemplateName(): string
    {
        return '192 000 Hz; 16 Bit; Mono; PCM';
    }
}
