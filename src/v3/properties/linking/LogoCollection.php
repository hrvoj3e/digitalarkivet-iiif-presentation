<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

/**
 * Logo linking property.
 * @link https://iiif.io/api/presentation/3.0/#logo
 */
class LogoCollection
{

	/**
	 * Logos.
	 *
	 * @var Logo[]
	 */
	protected array $logoCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(Logo ...$logo)
	{
		$this->logoCollection = $logo;
	}

	/**
	 * Returns an array representation of the logo linking property.
	 */
	public function toArray(): array
	{
		$logoCollection = [];

		foreach ($this->logoCollection as $logo) {
			$logoCollection[] = $logo->toArray();
		}

		return $logoCollection;
	}
}
