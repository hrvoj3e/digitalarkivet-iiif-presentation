<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\technical\BehaviorCollection;

/**
 * Trait for resources with behavior.
 */
trait WithBehaviorTrait
{
    /**
     * Behavior collection.
     */
    protected ?BehaviorCollection $behavior = null;

    /**
     * Set the behavior collection.
     */
    public function setBehavior(BehaviorCollection $behavior): void
    {
        $this->behavior = $behavior;
    }

    /**
     * Returns the behavior collection.
     */
    public function getBehavior(): ?BehaviorCollection
    {
        return $this->behavior;
    }
}
