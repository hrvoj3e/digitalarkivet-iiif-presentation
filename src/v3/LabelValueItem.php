<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3;

/**
 * Label value item.
 */
class LabelValueItem
{
    /**
     * Constructor.
     */
    public function __construct(
        protected LanguageStrings $label,
        protected LanguageStrings $value
    ) {
    }

    /**
     * Returns an array representation of the label value item.
     */
    public function toArray(): array
    {
        return [
			'label' => $this->label->toArray(),
			'value' => $this->value->toArray(),
		];
    }
}
