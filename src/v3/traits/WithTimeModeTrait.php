<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\technical\TimeMode;

/**
 * Trait for resources with a time mode.
 */
trait WithTimeModeTrait
{
    /**
     * Time mode.
     */
    protected ?TimeMode $timeMode = null;

    /**
     * Set time mode.
     */
    public function setTimeMode(TimeMode $timeMode): void
    {
        $this->timeMode = $timeMode;
    }

    /**
     * Returns the time mode.
     */
    public function getTimeMode(): ?TimeMode
    {
        return $this->timeMode;
    }
}
