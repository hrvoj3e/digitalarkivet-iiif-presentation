<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\PartOfCollection;

/**
 * Trait for resources with partOfs.
 */
trait WithPartOfTrait
{
    /**
     * Part of.
     */
    protected ?PartOfCollection $partOf = null;

    /**
     * Set part Of.
     */
    public function setPartOf(PartOfCollection $partOf): void
    {
        $this->partOf = $partOf;
    }

    /**
     * Returns the part of collection.
     */
    public function getPartOf(): ?PartOfCollection
    {
        return $this->partOf;
    }
}
