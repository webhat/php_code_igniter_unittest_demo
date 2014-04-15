<?php
/**
 * Created by JetBrains PhpStorm.
 * User: danielcrompton
 * Date: 4/15/14
 * Time: 3:45 PM
 * To change this template use File | Settings | File Templates.
 */

include 'src/Example1.php';

class Example1Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->example = new Example1();
    }

    public function tearDown()
    {
    }

    public function testExampleReturn()
    {
        $expected = 'test';
        $actual = $this->example->example();

        $this->assertEquals($expected, $actual);
    }
}
