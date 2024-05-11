<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    public function testPop()
    {
        $collection = new Collect([1, 2, 3, 4, 5]);
        $collection->pop();
        $this->assertEquals([1, 2, 3, 4], $collection->toArray());
    }

    public function testSplice()
    {
        $collection = new Collect([1, 2, 3, 4, 5]);
        $collection->splice([2, 3 ]);
        $this->assertEquals([1, 2, 5], $collection->toArray());
    }

    public function testKeys()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $keys = $collection->keys()->toArray();
        $this->assertEquals(['a', 'b', 'c'], $keys);
    }

    public function testFirst()
    {
        $collection = new Collect([1, 2, 3, 4, 5]);
        $first = $collection->first();
        $this->assertEquals(1, $first);
    }
}
