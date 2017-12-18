<?php
/**
 * Created by PhpStorm.
 * User: Nikolion
 * Date: 18.12.2017
 * Time: 14:38
 */

use PHPUnit\Framework\TestCase;
require __DIR__."/../src/Calculator.php";

class CalculatorTest extends TestCase
{

    public function addTest(){

    }

    public function test()
    {
        $calc = new Calculator();
        $this->assertEquals(4,$calc->add(2,2),'Not right');
    }
}
