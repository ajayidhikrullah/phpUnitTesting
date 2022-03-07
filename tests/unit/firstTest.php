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
        // var_dump($ans);exit();
    
    $ans = $this->assertEquals($c, 20);
    }
    
    public function testTrueAssertsToTrue(){
        $this->assertTrue(true); //assertTrue is to check if a statement is true or false.
    }
}


// https://www.youtube.com/watch?v=k9ak_rv9X0Y&list=PLfdtiltiRHWGXSggf05W-pJbD47-_d8bJ&index=1