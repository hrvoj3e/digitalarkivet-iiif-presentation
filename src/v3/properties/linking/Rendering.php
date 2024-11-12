<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

use digitalarkivet\iiif\presentation\v3\LanguageStrings;
use digitalarkivet\iiif\presentation\v3\traits\WithFormatTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithLabelTrait;

/**
 * Rendering.
 * @link https://iiif.io/api/presentation/3.0/#rendering
 */
class Rendering
{
	use WithFormatTrait { setFormat as protected; }
	use WithLabelTrait { setLabel as protected; }

	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		protected string $type,
		LanguageStrings $label,
		?string $format = null,
	) {
		$this->label = $label;
		$this->format = $format;
	}

	/**
	 * Returns an array representation of the rendering.
	 */
	public function toArray(): array
	{
		$array = [
			'id' => $this->id,
			'type' => $this->type,
			'label' => $this->label->toArray(),
		];

		if ($this->format) {
			$array['format'] = $this->format;
		}

		return $array;
	}
}
