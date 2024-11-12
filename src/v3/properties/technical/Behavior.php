<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\technical;

/**
 * Behaviors.
 */
enum Behavior: string
{
	// Temporal behaviors

	case AUTO_ADVANCE = 'auto-advance';
	case NO_AUTO_ADVANCE = 'no-auto-advance';
	case REPEAT = 'repeat';
	case NO_REPEAT = 'no-repeat';

	// Layout behaviors

	case UNORDERED = 'unordered';
	case INDIVIDUALS = 'individuals';
	case CONTINUOUS = 'continuous';
	case PAGED = 'paged';
	case FACING_PAGES = 'facing-pages';
	case NON_PAGED = 'non-paged';

	// Collection behaviors

	case MULTI_PART = 'multi-part';
	case TOGETHER = 'together';

	// Range behaviors

	case SEQUENCE = 'sequence';
	case THUBNAIL_NAV = 'thumbnail-nav';
	case NO_NAV = 'no-nav';

	// Miscellaneous behaviors

	case HIDDEN = 'hidden';
}
