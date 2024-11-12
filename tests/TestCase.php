<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * Base test case.
 */
abstract class TestCase extends PHPUnitTestCase
{
	use MockeryPHPUnitIntegration;
}
