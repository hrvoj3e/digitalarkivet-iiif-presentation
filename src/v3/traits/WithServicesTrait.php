<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\ServicesCollection;

/**
 * Trait for resources with services.
 */
trait WithServicesTrait
{
    /**
     * Services collecitons.
     *
     * @var ServicesCollection[]
     */
    protected array $services = [];

    /**
     * Add a services colleciton.
     */
    public function addServices(ServicesCollection $services): void
    {
        $this->services[] = $services;
    }

    /**
     * Returns the services collecitons.
     *
     * @return ServicesCollection[]
     */
    public function getServices(): array
    {
        return $this->services;
    }
}
