<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\AIF\FormatAiffAudioInterchangeFileFormat;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class AIF88200Hz24BitMonoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::FORMAT_AIFF_AUDIO_INTERCHANGE_FILE_FORMAT;
    }

    public function getTemplateName(): string
    {
        return '88 200 Hz; 24 Bit; Mono; PCM';
    }
}
