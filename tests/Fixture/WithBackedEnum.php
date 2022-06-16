<?php

declare(strict_types=1);

namespace Test\Fixture;


final class WithBackedEnum
{
    public function __construct(
        public readonly BackedEnum $enum
    ) {
    }
}
