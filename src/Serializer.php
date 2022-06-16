<?php

declare(strict_types=1);

namespace Istok\Serializer;


final class Serializer
{
    public function toArray(object $obj): array
    {
        $reflection = new \ReflectionClass($obj);
        $properties = $reflection->getProperties();
        $r = [];
        foreach ($properties as $property) {
            $type = $property->getType();
            if(!$type || $type->isBuiltin()) {
                $r[$property->getName()] = $property->getValue($obj);
            } else {
                $r[$property->getName()] = $this->toArray($property->getValue($obj));
            }
        }

        return $r;
    }

    /**
     * @template T
     * @param class-string<T> $className
     * @return T
     */
    public function fromArray(array $serialized, string $className): object
    {
        $reflection = new \ReflectionClass($className);
        $instance = $reflection->newInstanceWithoutConstructor();
        foreach ($serialized as $k => $v) {
            if(!$reflection->hasProperty($k)) {
                continue;
            }

            $property = $reflection->getProperty($k);
            $property->setValue($instance, $v);
        }
        return $instance;
    }
}
