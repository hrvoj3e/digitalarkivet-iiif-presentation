<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * See also linking property.
 * @link https://iiif.io/api/presentation/3.0/#seealso
 */
class SeeAlsoCollection
{
    /**
     * See alsos.
     *
     * @var SeeAlso[]
     */
    protected array $seeAlsoCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(SeeAlso ...$seeAlso)
	{
		$this->seeAlsoCollection = $seeAlso;
	}

	/**
	 * Returns an array representation of the see also linking property.
	 */
	public function toArray(): array
	{
		$seeAlsoCollection = [];

		foreach ($this->seeAlsoCollection as $seeAlso) {
			$seeAlsoCollection[] = $seeAlso->toArray();
		}

		return $seeAlsoCollection;
	}
}
