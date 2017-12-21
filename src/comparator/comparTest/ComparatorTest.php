<?php
/**
 * Created by PhpStorm.
 * User: Nikolion
 * Date: 19.12.2017
 * Time: 20:12
 */

//require __DIR__ . '/../Comparator.php';
require __DIR__.'/../../../vendor/autoload.php';
class ComparatorTest extends PHPUnit\Framework\TestCase
{

    public function testIsGreater()
    {
        $this->assertTrue(Comparator::isGreater(7, 5));

    }

    public function testIsGreater2()
    {
        $compar = new Comparator();
        $this->assertTrue($compar->isGreater2(7,6));
    }

    public function testIsGreater3()
    {
        $compar = new Comparator();
        $this->assertTrue($compar->isGreater2(7,6));
    }

    public function testIsGreater4()
    {
        $compar = new Comparator();
        $this->assertTrue($compar->isGreater2(7,6));
    }

   /* public function testIsGreater2()
    {
        $compar = new Comparator();
        $args = [5, 3];
        $result = $this->invokeMethod($compar, 'isGreater2', $args);
        self::assertEquals(true, $result);
        $this->assertTrue(Comparator::isGreater(7, 6));

    }


    public function testIsGreater3()
    {
        $compar = new Comparator();
        $args = [5, 3];
        $result = $this->invokeMethod($compar, 'isGreater2', $args);
        self::assertEquals(true, $result);
        $this->assertTrue(Comparator::isGreater(7, 6));

    }

    public function testIsGreater4()
    {
        $compar = new Comparator();
        $args = [5, 3];
        $result = $this->invokeMethod($compar, 'isGreater2', $args);
        self::assertEquals(true, $result);
        $this->assertTrue(Comparator::isGreater(7, 6));

    }

    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }*/
}
