<?php

use PHPUnit\Framework\TestCase;

require './src/Task1.php';

class Task1Test extends TestCase
{
    public function testfactZero()
    {
        $task1 = new Task1();
        $result = $task1->fact(0);
        $this->assertEquals(1, $result);
    }

    public function testfactOne()
    {
        $task1 = new Task1();
        $result = $task1->fact(1);
        $this->assertEquals(1, $result);
    }

    public function testfactFive()
    {
        $task1 = new Task1();
        $result = $task1->fact(5);
        $this->assertEquals(120, $result);
    }

    public function testfactRandomInt()
    {
        $task1 = new Task1();
        $randomInt = mt_rand(4, 100);
        $expectedResult = $task1->fact($randomInt - 1) * $randomInt;
        $result = $task1->fact($randomInt);
        $this->assertEquals($expectedResult, $result);
    }

    public function testfactNegative()
    {
        $task1 = new Task1();
        $result = $task1->fact(-3);
        $this->assertNull($result);
    }

    public function testfactFloat()
    {
        $task1 = new Task1();
        $result = $task1->fact(1.5);
        $this->assertNull($result);
    }

    public function testfactFalse()
    {
        $task1 = new Task1();
        $result = $task1->fact(false);
        $this->assertNull($result);
    }

    public function testfactString()
    {
        $task1 = new Task1();
        $result = $task1->fact('abc');
        $this->assertNull($result);
    }
}
