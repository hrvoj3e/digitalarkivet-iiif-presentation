<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

use digitalarkivet\iiif\presentation\v3\LanguageStrings;
use digitalarkivet\iiif\presentation\v3\traits\WithLabelTrait;

/**
 * Part of.
 * @link https://iiif.io/api/presentation/3.0/#partof
 */
class PartOf
{
	use WithLabelTrait { setLabel as protected; }

	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		protected string $type,
		LanguageStrings $label,
	) {
		$this->label = $label;
	}

	/**
	 * Returns an array representation of the part of.
	 */
	public function toArray(): array
	{
		$array = [
			'id' => $this->id,
			'type' => $this->type,
		];

		if ($this->label) {
			$array['label'] = $this->label->toArray();
		}

		return $array;
	}
}
