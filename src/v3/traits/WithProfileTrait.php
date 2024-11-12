<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

/**
 * Trait for resources with a profile.
 */
trait WithProfileTrait
{
    /**
     * Profile.
     */
    protected ?string $profile = null;

    /**
     * Set the profile.
     */
    public function setProfile(string $profile): void
    {
        $this->profile = $profile;
    }

    /**
     * Returns the profile.
     */
    public function getProfile(): ?string
    {
        return $this->profile;
    }
}
