<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * Services linking property.
 * @link https://iiif.io/api/presentation/3.0/#services
 */
class ServicesCollection
{
	/**
	 * Services.
	 *
	 * @var Services[]
	 */
	protected array $servicesCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(Services ...$services)
	{
		$this->servicesCollection = $services;
	}

	/**
	 * Returns an array representation of the services linking property.
	 */
	public function toArray(): array
	{
		$servicesCollection = [];

		foreach ($this->servicesCollection as $services) {
			$servicesCollection[] = $services->toArray();
		}

		return $servicesCollection;
	}
}
