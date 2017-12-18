<?php
/**
 * Created by PhpStorm.
 * User: Nikolion
 * Date: 18.12.2017
 * Time: 20:13
 */

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertNotEquals(5,$calc->add(2,2),'Not right adding');
    }
}
