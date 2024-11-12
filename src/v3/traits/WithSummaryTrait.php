<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\LanguageStrings;

/**
 * Trait for resources with a summary.
 */
trait WithSummaryTrait
{
    /**
     * Summary.
     */
    protected ?LanguageStrings $summary = null;

    /**
     * Set the summary.
     */
    public function setSummary(LanguageStrings $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * Returns the summary.
     */
    public function getSummary(): ?LanguageStrings
    {
        return $this->summary;
    }
}
