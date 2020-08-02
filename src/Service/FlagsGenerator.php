<?php

namespace Rteeom\EmojiISOFlagsBundle\Service;

use Rteeom\Exceptions\IsoFlagGeneratorException;
use Rteeom\FlagsGenerator as BaseFlagGenerator;

class FlagsGenerator
{
    private BaseFlagGenerator $flagService;

    public function __construct()
    {
        $this->flagService = new BaseFlagGenerator();
    }

    /**
     * @param string $isoCountryCode
     * @return string
     * @throws IsoFlagGeneratorException
     */
    public function getEmojiFlag(string $isoCountryCode): string
    {
        return $this->flagService->getEmojiFlag($isoCountryCode);
    }

    public function getEmojiFlagOrNull(string $isoCountryCode): ?string
    {
        return $this->flagService->getEmojiFlagOrNull($isoCountryCode);
    }
}
