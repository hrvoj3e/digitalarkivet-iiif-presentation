<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\SeeAlsoCollection;

/**
 * Trait for resources with see also.
 */
trait WithSeeAlsoTrait
{
    /**
     * See also collection.
     */
    protected ?SeeAlsoCollection $seeAlso = null;

    /**
     * Set see also collection.
     */
    public function setSeeAlso(SeeAlsoCollection $seeAlso): void
    {
        $this->seeAlso = $seeAlso;
    }

    /**
     * Returns the see also collection.
     */
    public function getSeeAlso(): ?SeeAlsoCollection
    {
        return $this->seeAlso;
    }
}
