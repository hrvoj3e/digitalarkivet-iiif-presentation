<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\LanguageStrings;

/**
 * Trait for resources with a label.
 */
trait WithLabelTrait
{
    /**
     * Label.
     */
    protected ?LanguageStrings $label = null;

    /**
     * Set the label.
     */
    public function setLabel(LanguageStrings $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns the label.
     */
    public function getLabel(): ?LanguageStrings
    {
        return $this->label;
    }
}
