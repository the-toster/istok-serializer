<?php

declare(strict_types=1);

namespace Test\Fixture;


final class Item
{
    public function __construct(
        public readonly int $id
    )
    {
    }
}
