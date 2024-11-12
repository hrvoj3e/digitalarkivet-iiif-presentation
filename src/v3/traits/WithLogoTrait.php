<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\linking\LogoCollection;

/**
 * Trait for resources with a logo.
 */
trait WithLogoTrait
{
    /**
     * Logo collection.
     */
    protected ?LogoCollection $logo = null;

    /**
     * Set logo collection.
     */
    public function setLogo(LogoCollection $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * Returns the logo collection.
     */
    public function getLogo(): LogoCollection
    {
        return $this->logo;
    }
}
