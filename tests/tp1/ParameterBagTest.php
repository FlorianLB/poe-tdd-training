<?php

namespace tests\tp1;

use tp1\ParameterBag;

class ParameterBagTest extends \PHPUnit_Framework_TestCase
{
    protected $bag;

    public function setUp()
    {

        $this->bag = new ParameterBag(array('foo' => 'bar'));

    }

    public function testCount()
    {
        $this->bag->set('vert', 'tortue');
        $this->bag->set('gris', 'loup');
        $this->bag->set('rouge', 'poisson');

        $this->assertEquals( 4, $this->bag->count());
    }

    public function testGet()
    {



        // will pass
        $this->assertEquals('bar', $this->bag->get('foo'));
        $this->assertEquals(null, $this->bag->get('pony'));
        $this->assertEquals('pink', $this->bag->get('pony', 'pink'));


        // // will fail
        // $this->assertEquals('lol', $bag->get('foo'));

    }

    public function testGetInt()
    {

    }

    public function testSet()
    {

    }

    public function testHas()
    {

    }

    public function testRemove()
    {

    }

    public function testAll()
    {

    }

    public function testKeys()
    {

    }

    public function testAdd()
    {

    }
}
