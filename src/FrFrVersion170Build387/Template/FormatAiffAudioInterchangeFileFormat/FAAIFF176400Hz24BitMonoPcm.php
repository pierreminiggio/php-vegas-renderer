<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\FormatAiffAudioInterchangeFileFormat;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class FAAIFF176400Hz24BitMonoPcm extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::FORMAT_AIFF_AUDIO_INTERCHANGE_FILE_FORMAT;
    }

    public function getTemplateName(): string
    {
        return '176 400 Hz; 24 Bit; Mono; PCM';
    }
}
