<?php
/**
 * Created by PhpStorm.
 * User: Nikolion
 * Date: 18.12.2017
 * Time: 14:38
 */

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../Calculator.php";

class CalculatorTest extends TestCase
{

    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(4,$calc->add(2,2),'Not right adding');
        $this->assertEquals(5.0,$calc->add(2.5,2.5),'Not right adding');
        $this->assertEquals(1.0,$calc->add(1.0,0.2),'Not right adding',0.8);
    }
    public function testMinus()
    {
        $calc = new Calculator();
        $this->assertEquals(3,$calc->minus(6,3),'Not right');
    }
}
