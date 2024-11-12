<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\HomepageCollection;

/**
 * Trait for resources with a homepage.
 */
trait WithHomepageTrait
{
    /**
     * Homepage collection.
     */
    protected ?HomepageCollection $homepage = null;

    /**
     * Set homepage collection.
     */
    public function setHomepage(HomepageCollection $homepage): void
    {
        $this->homepage = $homepage;
    }

    /**
     * Returns the homepage collection.
     */
    public function getHomepage(): ?HomepageCollection
    {
        return $this->homepage;
    }
}
