<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

/**
 * Trait for resources with a language.
 */
trait WithLanguageTrait
{
    /**
     * Languages.
     *
     * @var string[]
     */
    protected array $language = [];

    /**
     * Set the languages.
     *
     * @param string[] $language
     */
    public function setLanguage(array $language): void
    {
        $this->language = $language;
    }

    /**
     * Returns the languages.
     *
     * @return string[]
     */
    public function getLanguage(): array
    {
        return $this->language;
    }
}
