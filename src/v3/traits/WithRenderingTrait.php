<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\RenderingCollection;

/**
 * Trait for resources with a rendering.
 */
trait WithRenderingTrait
{
    /**
     * Rendering collection.
     */
    protected ?RenderingCollection $rendering = null;

    /**
     * Set rendering collection.
     */
    public function setRendering(RenderingCollection $rendering): void
    {
        $this->rendering = $rendering;
    }

    /**
     * Returns the rendering collection.
     */
    public function getRendering(): ?RenderingCollection
    {
        return $this->rendering;
    }
}
