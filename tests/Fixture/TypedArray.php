<?php

declare(strict_types=1);

namespace Test\Fixture;


final class TypedArray
{
    /** @var Item[] */
    private readonly array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }
}
