<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * Supplementary linking property.
 * @link https://iiif.io/api/presentation/3.0/#supplementary
 */
class Supplementary
{
	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		protected string $type,
	) {
	}

	/**
	 * Returns an array representation of the supplementary linking property.
	 */
	public function toArray(): array
	{
		return [
			'id' => $this->id,
			'type' => $this->type,
		];
	}
}
