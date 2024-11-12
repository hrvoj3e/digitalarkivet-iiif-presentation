<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3;

use digitalarkivet\iiif\presentation\v3\content\ContentResource;
use digitalarkivet\iiif\presentation\v3\traits\WithBehaviorTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithHomepageTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithLabelTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithMetadataTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithPartOfTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithProviderTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithRenderingTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithRequiredStatementTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithRightsTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithSeeAlsoTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithServiceTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithSummaryTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithThumbnailTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithTimeModeTrait;

/**
 * Annotation resource.
 */
class Annotation extends Resource
{
	use WithBehaviorTrait;
	use WithHomepageTrait;
	use WithLabelTrait;
	use WithMetadataTrait;
	use WithPartOfTrait;
	use WithProviderTrait;
	use WithRenderingTrait;
	use WithRequiredStatementTrait;
	use WithRightsTrait;
	use WithSeeAlsoTrait;
	use WithServiceTrait;
	use WithSummaryTrait;
	use WithThumbnailTrait;
	use WithTimeModeTrait;

	/**
	 * Body.
	 */
	protected ?ContentResource $body = null;

	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		protected string $target,
		protected Motivation $motivation = Motivation::PAINTING,
		bool $isTopLevel = true,
	) {
		$this->isTopLevel = $isTopLevel;
	}

	/**
	 * Sets the body.
	 */
	public function setBody(ContentResource $body): void
	{
		$this->body = $body;
	}

	/**
	 * Returns the body.
	 */
	public function getBody(): ContentResource
	{
		return $this->body;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		$array = [
			'id' => $this->id,
			'target' => $this->target,
			'motivation' => $this->motivation->value,
		];

		if ($this->label) {
			$array['label'] = $this->label->toArray();
		}

		if ($this->metadata) {
			$array['metadata'] = $this->metadata->toArray();
		}

		if ($this->summary) {
			$array['summary'] = $this->summary->toArray();
		}

		if ($this->requiredStatement) {
			$array['requiredStatement'] = $this->requiredStatement->toArray();
		}

		if ($this->rights) {
			$array['rights'] = $this->rights;
		}

		if ($this->provider) {
			$array['provider'] = $this->provider->toArray();
		}

		if ($this->thumbnail) {
			$array['thumbnail'] = $this->thumbnail->toArray();
		}

		if ($this->behavior) {
			$array['behavior'] = $this->behavior->toArray();
		}

		if ($this->timeMode) {
			$array['timeMode'] = $this->timeMode->value;
		}

		if ($this->seeAlso) {
			$array['seeAlso'] = $this->seeAlso->toArray();
		}

		if ($this->service) {
			$array['service'] = $this->service->toArray();
		}

		if ($this->homepage) {
			$array['homepage'] = $this->homepage->toArray();
		}

		if ($this->rendering) {
			$array['rendering'] = $this->rendering->toArray();
		}

		if ($this->partOf) {
			$array['partOf'] = $this->partOf->toArray();
		}

		if ($this->body) {
			$array['body'] = $this->body->toArray();
		}

		return [...parent::toArray(), ... $array];
	}
}
