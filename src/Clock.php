<?php declare(strict_types = 1);

namespace Orisai\Clock;

use DateTimeImmutable;

interface Clock
{

	public function now(): DateTimeImmutable;

}
