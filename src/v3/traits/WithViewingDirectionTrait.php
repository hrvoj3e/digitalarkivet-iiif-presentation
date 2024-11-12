<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\technical\ViewingDirection;

/**
 * Trait for resources with a viewing direction.
 */
trait WithViewingDirectionTrait
{
    /**
     * Viewing direction.
     */
    protected ?ViewingDirection $viewingDirection = null;

    /**
     * Set viewing direction.
     */
    public function setViewingDirection(ViewingDirection $viewingDirection): void
    {
        $this->viewingDirection = $viewingDirection;
    }

    /**
     * Returns the viewing direction.
     */
    public function getViewingDirection(): ?ViewingDirection
    {
        return $this->viewingDirection;
    }
}
