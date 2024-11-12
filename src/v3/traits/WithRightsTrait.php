<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

/**
 * Trait for resources with rights.
 */
trait WithRightsTrait
{
    /**
     * Rights.
     */
    protected ?string $rights = null;

    /**
     * Set the rights.
     */
    public function setRights(string $rights): void
    {
        $this->rights = $rights;
    }

    /**
     * Returns the rights.
     */
    public function getRights(): ?string
    {
        return $this->rights;
    }
}
