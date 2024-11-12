<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\linking;

use digitalarkivet\iiif\presentation\v3\LanguageStrings;
use digitalarkivet\iiif\presentation\v3\traits\WithFormatTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithLabelTrait;
use digitalarkivet\iiif\presentation\v3\traits\WithProfileTrait;

/**
 * See also.
 * @link https://iiif.io/api/presentation/3.0/#seealso
 */
class SeeAlso
{
    use WithFormatTrait { setFormat as protected; }
    use WithLabelTrait { setLabel as protected; }
    use WithProfileTrait { setProfile as protected; }

    /**
     * Constructor.
     */
    public function __construct(
		protected string $id,
		protected string $type,
		?LanguageStrings $label = null,
		?string $format = null,
		?string $profile = null,
	) {
		$this->label = $label;
		$this->format = $format;
		$this->profile = $profile;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        $array = [
			'id' => $this->id,
			'type' => $this->type,
		];

		if ($this->label) {
			$array['label'] = $this->label->toArray();
		}

		if ($this->format) {
			$array['format'] = $this->format;
		}

		if ($this->profile) {
			$array['profile'] = $this->profile;
		}

        return $array;
    }
}
