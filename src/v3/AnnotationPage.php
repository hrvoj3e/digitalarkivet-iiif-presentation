<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3;

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

/**
 * Annotation page resource.
 */
class AnnotationPage extends Resource
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

	/**
	 * Items.
	 *
	 * @var Annotation[]
	 */
	protected $items = [];

	/**
	 * Constructor.
	 */
	public function __construct(
		protected string $id,
		bool $isTopLevel = true,
	) {
		$this->isTopLevel = $isTopLevel;
	}

	/**
	 * Add item.
	 */
	public function addItem(Annotation $annotation): void
	{
		$this->items[] = $annotation;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		$array = [
			'id' => $this->id,
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

		if (!empty($this->items)) {
			$items = [];

			foreach ($this->items as $item) {
				$items[] = $item->toArray();
			}

			$array['items'] = $items;
		}

		return [...parent::toArray(), ... $array];
	}
}
