<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * Rendering linking property.
 * @link https://iiif.io/api/presentation/3.0/#rendering
 */
class RenderingCollection
{
	/**
	 * Renderings.
	 *
	 * @var Rendering[]
	 */
	protected array $renderingCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(Rendering ...$rendering)
	{
		$this->renderingCollection = $rendering;
	}

	/**
	 * Returns an array representation of the rendering linking property.
	 */
	public function toArray(): array
	{
		$renderingCollection = [];

		foreach ($this->renderingCollection as $rendering) {
			$renderingCollection[] = $rendering->toArray();
		}

		return $renderingCollection;
	}
}
