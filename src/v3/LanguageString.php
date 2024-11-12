<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3;

/**
 * Language string.
 */
class LanguageString
{
    /**
     * Language.
     */
    protected string $language;

    /**
     * Strings.
     *
     * @var string[]
     */
    protected array $strings = [];

    /**
     * Constructor.
     *
     * @param string[] $strings
     */
    public function __construct(string $language, array $strings)
    {
        $this->language = $language;

        $this->strings = $strings;
    }

    /**
     * Returns an array representation of the language string.
     */
    public function toArray(): array
    {
        return [$this->language => $this->strings];
    }
}
