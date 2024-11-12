<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\technical;

/**
 * Viewing directions.
 */
enum ViewingDirection: string
{
	case BOTTOM_TO_TOP = 'bottom-to-top';
    case LEFT_TO_RIGHT = 'left-to-right';
    case RIGHT_TO_LEFT = 'right-to-left';
    case TOP_TO_BOTTOM = 'top-to-bottom';
}
