<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * Service linking property.
 * @link https://iiif.io/api/presentation/3.0/#service
 */
class ServiceCollection
{
	/**
	 * Services.
	 *
	 * @var Service[]
	 */
	protected array $serviceCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(Service ...$service)
	{
		$this->serviceCollection = $service;
	}

	/**
	 * Returns an array representation of the service linking property.
	 */
	public function toArray(): array
	{
		$serviceCollection = [];

		foreach ($this->serviceCollection as $service) {
			$serviceCollection[] = $service->toArray();
		}

		return $serviceCollection;
	}
}
