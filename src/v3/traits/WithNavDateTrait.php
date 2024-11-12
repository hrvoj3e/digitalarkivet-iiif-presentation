<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use DateTimeInterface;

/**
 * Trait for resources with a nav date.
 */
trait WithNavDateTrait
{
    /**
     * Date format.
     */
    protected const NAV_DATE_FORMAT = 'Y-m-d\TH:i:s\Z';

    /**
     * Nav date.
     */
    protected ?DateTimeInterface $navDate = null;

    /**
     * Set the nav date.
     */
    public function setNavDate(DateTimeInterface $navDate): void
    {
        $this->navDate = $navDate;
    }

    /**
     * Returns the nav date.
     */
    public function getNavDate(): ?DateTimeInterface
    {
        return $this->navDate;
    }

	/**
	 * Returns the nav date as a string.
	 */
	public function getNavDateString(): ?string
	{
		return $this->navDate?->format(self::NAV_DATE_FORMAT);
	}
}
