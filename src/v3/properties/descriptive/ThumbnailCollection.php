<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\descriptive;

/**
 * Thumbnail descriptive property.
 * @link https://iiif.io/api/presentation/3.0/#thumbnail
 */
class ThumbnailCollection
{
	/**
	 * @var Thumbnail[]
	 */
	protected array $thumbnailCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(Thumbnail ...$thumbnail)
	{
		$this->thumbnailCollection = $thumbnail;
	}

	/**
	 * Returns an array representation of the thumbnail descriptive property.
	 */
	public function toArray(): array
	{
		$thumbnailCollection = [];

		foreach ($this->thumbnailCollection as $thumbnail) {
			$thumbnailCollection[] = $thumbnail->toArray();
		}

		return $thumbnailCollection;
	}
}
