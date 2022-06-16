<?php

declare(strict_types=1);

namespace Test\Fixture;


final class WithPureEnum
{
    public function __construct(
        public readonly PureEnum $enum
    )
    {
    }
}
