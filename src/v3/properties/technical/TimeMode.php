<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\technical;

/**
 * Time modes.
 */
enum TimeMode: string
{
	case TRIM = 'trim';
	case SCALE = 'scale';
	case LOOP = 'loop';
}
