<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\descriptive\Metadata;

/**
 * Trait for resources with metadata.
 */
trait WithMetadataTrait
{
    /**
     * Metadata.
     */
    protected ?Metadata $metadata = null;

    /**
     * Set the metadata.
     */
    public function setMetadata(Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns the metadata.
     */
    public function getMetadata(): ?Metadata
    {
        return $this->metadata;
    }
}
