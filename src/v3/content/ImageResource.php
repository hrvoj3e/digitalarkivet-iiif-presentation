<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\content;

use digitalarkivet\iiif\presentation\v3\properties\linking\ServiceCollection;
use digitalarkivet\iiif\presentation\v3\traits\WithDimensionsTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithFormatTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithRotationTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithServiceTrait;

/**
 * Image resource.
 */
class ImageResource extends ContentResource
{
	use WithDimensionsTrait { setHeight as protected; setWidth as protected; }
	use WithFormatTrait { setFormat as protected; }
	use WithRotationTrait { setRotation as protected; }
	use WithServiceTrait { setService as protected; }

	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		?string $format = null,
		?int $height = null,
		?int $width = null,
		?int $rotation = null,
		?ServiceCollection $service = null,
	) {
		$this->format = $format;
		$this->height = $height;
		$this->width = $width;
		$this->rotation = $rotation;
		$this->service = $service;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getResourcetype(): ResourceType
	{
		return ResourceType::IMAGE;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		$array = [
			'id' => $this->id,
			'type' => $this->getResourcetype()->value,
		];

		if ($this->label) {
			$array['label'] = $this->label->toArray();
		}

		if ($this->format) {
			$array['format'] = $this->format;
		}

		if ($this->height) {
			$array['height'] = $this->height;
		}

		if ($this->width) {
			$array['width'] = $this->width;
		}

		if ($this->rotation) {
			$array['rotation'] = $this->rotation;
		}

		if ($this->service) {
			$array['service'] = $this->service->toArray();
		}

		return $array;
	}
}
