<?php

namespace tests\tp1;

use tp1\ParameterBag;

class ParameterBagTest extends \PHPUnit_Framework_TestCase
{

    protected $bag;

    public function setUp()
    {
        $this->bag = new ParameterBag(array('foo' => 'bar', 'baz' => '123'));
    }

    public function testCount()
    {
        $this->assertEquals('2', $this->bag->count());

    }

    public function testGet()
    {
        $this->assertEquals('bar', $this->bag->get('foo'));
        $this->assertEquals(null, $this->bag->get('pony'));

        $this->assertEquals('pink', $this->bag->get('pony', 'pink'));

        $this->assertEquals('pink', $this->bag->get('pony','pink'));
        
        //$bag = new ParameterBag(array('foo' => 'bar'));

        // will pass
        //$this->assertEquals('bar', $bag->get('foo'));

        // will fail
        //$this->assertEquals('lol', $bag->get('foo'));

    }

    public function testGetInt()
    {
        $this->assertEquals(0,$this->bag->getInt("foo"));
        //test Travis
    }

    public function testSet()
    {
        $this->bag->set("foo", "test");
        $this->assertEquals('test', $this->bag->get("foo"));
    }

    public function testHas()
    {
        $this->assertEquals(true, $this->bag->has("foo"));
    }

    public function testRemove()
    {
        $this->assertEquals(true, $this->bag->has("foo"));
        $this->bag->remove("foo");
        $this->assertEquals(false, $this->bag->has(""));

    }

    public function testAll()
    {
        $this->assertEquals(array('foo' => 'bar', 'baz' => '123'), $this->bag->all());
    }

    public function testKeys()
    {
        $this->assertEquals(array('foo', 'baz'), $this->bag->keys("foo"));
    }

    public function testAdd()
    {
        $this->bag->add(array('foo2' => 'test'));
        $this->assertEquals('test',$this->bag->get('foo2'));
    }
}
