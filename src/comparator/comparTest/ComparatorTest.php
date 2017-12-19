<?php
/**
 * Created by PhpStorm.
 * User: Nikolion
 * Date: 19.12.2017
 * Time: 20:12
 */

require __DIR__.'/../Comparator.php';
class ComparatorTest extends PHPUnit\Framework\TestCase
{

    public function testIsGreater()
    {
        $this->assertTrue(Comparator::isGreater(7, 6));
    }
}
