<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * Homepage linking property.
 * @link https://iiif.io/api/presentation/3.0/#homepage
 */
class HomepageCollection
{
    /**
     * Homepages.
     *
     * @var Homepage[]
     */
    protected array $homepageCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(Homepage ...$homepage)
	{
		$this->homepageCollection = $homepage;
	}

	/**
	 * Returns an array representation of the homepage linking property.
	 */
	public function toArray(): array
	{
		$homepageCollection = [];

		foreach ($this->homepageCollection as $homepage) {
			$homepageCollection[] = $homepage->toArray();
		}

		return $homepageCollection;
	}

}
