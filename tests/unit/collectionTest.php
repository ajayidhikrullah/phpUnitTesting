<?php

// $collection = new Collection;
use PHPUnit\Framework\TestCase;

Class CollectionTest extends TestCase{
    /** @test */

    public function emptyInstantiatedCollectionReturnsNoItems(){
        $collection = new \App\Support\Collection;
        // $user = new \App\Models\User;

        $this->assertEmpty($collection->get());

    }
}