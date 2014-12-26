<?php
namespace MyProjectTest\FirstClass;

use MyProject\FirstClass;

class FirstMethodTest extends \PHPUnit_Framework_TestCase
{

    /**
     * first method returns true
     */
    public function testFirstMethodReturnsTrue()
    {
        $FirstClass = new FirstClass;
        $result = $FirstClass->firstMethod();

        $this->assertTrue($result);
    }
}
