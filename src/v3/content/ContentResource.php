<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\content;

use digitalarkivet\iiif\presentation\v3\traits\WithLabelTrait;

/**
 * Content resource.
 */
abstract class ContentResource
{
	use WithLabelTrait;

	/**
	 * Returns the resource type.
	 */
	abstract public function getResourcetype(): ResourceType;

	/**
	 * Returns an array representation of the content resource.
	 */
	abstract public function toArray(): array;
}
