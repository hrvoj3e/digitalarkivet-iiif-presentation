<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

use digitalarkivet\iiif\presentation\v3\LanguageStrings;
use digitalarkivet\iiif\presentation\v3\traits\WithFormatTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithLabelTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithLanguageTrait;

/**
 * Homepage.
 * @link https://iiif.io/api/presentation/3.0/#homepage
 */
class Homepage
{
    use WithFormatTrait { setFormat as protected; }
    use WithLabelTrait { setLabel as protected; }
    use WithLanguageTrait { setLanguage as protected; }

    /**
     * Constructor.
     */
    public function __construct(
		protected string $id,
		LanguageStrings $label,
		protected string $type = 'Text',
		?string $format = null,
	) {
        $this->label = $label;
		$this->format = $format;
    }

    /**
     * Returns an array representation of the homepage.
     */
    public function toArray(): array
    {
		$array = [
			'id' => $this->id,
			'type' => $this->type,
			'label' => $this->label->toArray(),
		];

		if ($this->format) {
			$array['format'] = $this->format;
		}

		if ($this->language) {
			$array['language'] = $this->language;
		}

        return $array;
    }
}
