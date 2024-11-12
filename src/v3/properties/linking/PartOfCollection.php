<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * Part of linking property.
 * @link https://iiif.io/api/presentation/3.0/#partof
 */
class PartOfCollection
{
	/**
	 * Part ofs.
	 *
	 * @var PartOf[]
	 */
	protected array $partOfCollection;

	/**
	 * Constructor.
	 */
	public function __construct(PartOf ...$partOf)
	{
		$this->partOfCollection = $partOf;
	}

	/**
	 * Returns an array representation of the part of linking property.
	 */
	public function toArray(): array
	{
		$partOfCollection = [];

		foreach ($this->partOfCollection as $partOf) {
			$partOfCollection[] = $partOf->toArray();
		}

		return $partOfCollection;
	}
}
