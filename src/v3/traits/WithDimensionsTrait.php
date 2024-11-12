<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

/**
 * Trait for resources with dimensions.
 */
trait WithDimensionsTrait
{
    /**
     * Height.
     */
    protected ?int $height = null;

    /**
     * Width.
     */
    protected ?int $width = null;

    /**
     * Set the height.
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * Get the height.
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Set the width.
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * Get the width.
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }
}
