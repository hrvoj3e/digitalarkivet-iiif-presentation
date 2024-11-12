<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\technical;

class BehaviorCollection
{
	/**
	 * Behaviors.
	 *
	 * @var Behavior[]
	 */
	protected array $behaviorCollection = [];

	/**
	 * Constructor.
	 */
	public function __construct(Behavior ...$behavior)
	{
		$this->behaviorCollection = $behavior;
	}

	/**
	 * Returns an array representation of the behavior technical property.
	 */
	public function toArray(): array
	{
		$behaviorCollection = [];

		foreach ($this->behaviorCollection as $behavior) {
			$behaviorCollection[] = $behavior->value;
		}

		return $behaviorCollection;
	}
}
