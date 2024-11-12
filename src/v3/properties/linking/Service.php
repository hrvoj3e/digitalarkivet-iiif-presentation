<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

use digitalarkivet\iiif\presentation\v3\traits\WithProfileTrait;

/**
 * Service.
 * @link https://iiif.io/api/presentation/3.0/#service
 */
class Service
{
	use WithProfileTrait { setProfile as protected; }

	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		protected string $type,
		?string $profile = null,
	) {
		$this->profile = $profile;
	}

	/**
	 * Returns an array representation of the service item.
	 */
	public function toArray(): array
	{
		$array = [
			'id' => $this->id,
			'type' => $this->type,
		];

		if ($this->profile) {
			$array['profile'] = $this->profile;
		}

		return $array;
	}
}
