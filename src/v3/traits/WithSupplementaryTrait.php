<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\Supplementary;

/**
 * Trait for resources with a supplementary.
 */
trait WithSupplementaryTrait
{
    /**
     * Supplementary.
     */
    protected ?Supplementary $supplementary = null;

    /**
     * Set the supplementary.
     */
    public function setSupplementary(Supplementary $supplementary): void
    {
        $this->supplementary = $supplementary;
    }

    /**
     * Returns the supplementary.
     */
    public function getSupplementary(): ?Supplementary
    {
        return $this->supplementary;
    }
}
