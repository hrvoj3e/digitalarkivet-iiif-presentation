<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

/**
 * Trait for resources with rotation.
 */
trait WithRotationTrait
{
    /**
     * Rotation.
     */
    protected ?int $rotation = null;

    /**
     * Set the rotation.
     */
    public function setRotation(int $rotation): void
    {
        $this->rotation = $rotation;
    }

    /**
     * Get the rotation.
     */
    public function getRotation(): ?int
    {
        return $this->rotation;
    }
}
