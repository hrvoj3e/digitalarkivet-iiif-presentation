<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

use digitalarkivet\iiif\presentation\v3\traits\WithLabelTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithProfileTrait;

/**
 * Services.
 * @link https://iiif.io/api/presentation/3.0/#service
 */
class Services
{
	use WithLabelTrait;
	use WithProfileTrait;

	/**
	 * @var ServiceCollection[]
	 */
	protected array $service = [];

	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		protected string $type,
		ServiceCollection ...$service,
	) {
		$this->service = $service;
	}

	/**
	 * Returns an array representation of the services item.
	 */
	public function toArray(): array
	{
		$array = [
			'id' => $this->id,
			'type' => $this->type,
		];

		if ($this->label) {
			$array['label'] = $this->label;
		}

		if ($this->profile) {
			$array['profile'] = $this->profile;
		}

		$services = [];

		foreach ($this->service as $service) {
			$services[] = $service->toArray();
		}

		$array['service'] = $services;

		return $array;
	}
}
