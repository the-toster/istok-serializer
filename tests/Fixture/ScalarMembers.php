<?php

declare(strict_types=1);

namespace Test\Fixture;


final class ScalarMembers
{
    public function __construct(
        public readonly string $a,
        private int $int
    )
    {
    }
}
