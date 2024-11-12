<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\descriptive\Provider;

/**
 * Trait for resources with a provider.
 */
trait WithProviderTrait
{
    /**
     * Provider.
     */
    protected ?Provider $provider = null;

    /**
     * Set provider.
     */
    public function setProvider(Provider $provider): void
    {
        $this->provider = $provider;
    }

    /**
     * Returns the provider.
     */
    public function getProvider(): Provider
    {
        return $this->provider;
    }
}
