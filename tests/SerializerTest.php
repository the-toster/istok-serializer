<?php

declare(strict_types=1);

namespace Test;


use Istok\Serializer\Serializer;
use PHPUnit\Framework\TestCase;
use Test\Fixture\Item;
use Test\Fixture\ScalarMembers;
use Test\Fixture\TypedArray;

final class SerializerTest extends TestCase
{
    /** @test */
    public function scalar_members(): void
    {
        $serializer = new Serializer();
        $testObj = new ScalarMembers('A', 1);
        $arr = $serializer->toArray($testObj);
        $this->assertEquals($testObj, $serializer->fromArray($arr, ScalarMembers::class));
    }

    /** @test */
    public function typed_array(): void
    {
        $serializer = new Serializer();
        $testObj = new TypedArray([new Item(1), new Item(2)]);
        $arr = $serializer->toArray($testObj);
        $this->assertEquals($testObj, $serializer->fromArray($arr, TypedArray::class));
    }
}
