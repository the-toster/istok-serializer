<?php

declare(strict_types=1);

namespace Istok\Serializer;


final class Serializer
{
    public function toArray(object $obj): array
    {
        return [];
    }

    /**
     * @template T
     * @param class-string<T> $className
     * @return T
     */
    public function fromArray(array $serialized, string $className): object
    {

    }
}
