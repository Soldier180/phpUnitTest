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



    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(4,$calc->add(2,2),'Not right adding');
    }
    public function testMinus()
    {
        $calc = new Calculator();
        $this->assertEquals(3,$calc->minus(6,3),'Not right');
    }
}
