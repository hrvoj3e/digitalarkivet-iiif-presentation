<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3;

/**
 * Language strings.
 */
class LanguageStrings
{
    /**
     * Language strings.
     *
     * @var LanguageString[]
     */
    protected array $languageStrings = [];

    /**
     * Constructor.
     */
    public function __construct(LanguageString ...$languageString)
    {
        $this->languageStrings = $languageString;
    }

    /**
     * Returns an array representation of the language strings.
     */
    public function toArray(): array
    {
        $array = [];

        foreach ($this->languageStrings as $languageString) {
            $array = [...$array, ...$languageString->toArray()];
        }

        return $array;
    }
}
