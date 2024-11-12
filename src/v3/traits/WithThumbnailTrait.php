<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\descriptive\ThumbnailCollection;

/**
 * Trait for adding thumbnail to a class.
 */
trait WithThumbnailTrait
{
    /**
     * Thumbnail collection.
     */
    protected ?ThumbnailCollection $thumbnail = null;

    /**
     * Set thumbnail collection.
     */
    public function setThumbnail(ThumbnailCollection $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Returns the thumbnail collection.
     */
    public function getThumbnail(): ?ThumbnailCollection
    {
        return $this->thumbnail;
    }
}
