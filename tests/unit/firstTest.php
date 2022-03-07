<?php

$phpUnit = 'vendor/bin/phpunit';
echo $phpUnit;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testMultiplicationOfTwoNumber(){

        $a = 5;
        $b = 4;
        $c = $a * $b;
    $this->assertEquals($c, 20);
    }    
}


// https://www.youtube.com/watch?v=k9ak_rv9X0Y&list=PLfdtiltiRHWGXSggf05W-pJbD47-_d8bJ&index=1