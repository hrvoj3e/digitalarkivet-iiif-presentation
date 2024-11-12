<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\ServiceCollection;

/**
 * Trait for resources with a service.
 */
trait WithServiceTrait
{
    /**
     * Service collection.
     */
    protected ?ServiceCollection $service = null;

    /**
     * Set the service collection.
     */
    public function setService(ServiceCollection $service): void
    {
        $this->service = $service;
    }

    /**
     * Returns the service collection.
     */
    public function getService(): ?ServiceCollection
    {
        return $this->service;
    }
}
