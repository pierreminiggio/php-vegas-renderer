<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\FormatAiffAudioInterchangeFileFormat;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class FAAIFF88200Hz16BitMonoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::FORMAT_AIFF_AUDIO_INTERCHANGE_FILE_FORMAT;
    }

    public function getTemplateName(): string
    {
        return '88 200 Hz; 16 Bit; Mono; PCM';
    }
}
