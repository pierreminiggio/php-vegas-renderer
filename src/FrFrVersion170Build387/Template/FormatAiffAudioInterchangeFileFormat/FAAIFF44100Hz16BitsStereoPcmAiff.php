<?php

namespace PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\FormatAiffAudioInterchangeFileFormat;

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\RendererEnum;
use PierreMiniggio\VegasRenderer\Template;

class FAAIFF44100Hz16BitsStereoPcmAiff extends Template
{
    public function getRendererName(): string
    {
        return RendererEnum::FORMAT_AIFF_AUDIO_INTERCHANGE_FILE_FORMAT;
    }

    public function getTemplateName(): string
    {
        return '$(44 100) Hz; 16 bits; stéréo; PCM AIFF';
    }
}
