<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\Start;

/**
 * Trait for resources with a start.
 */
trait WithStartTrait
{
    /**
     * Start.
     */
    protected ?Start $start = null;

    /**
     * Set the start.
     */
    public function setStart(Start $start): void
    {
        $this->start = $start;
    }

    /**
     * Returns the start.
     */
    public function getStart(): ?Start
    {
        return $this->start;
    }
}
