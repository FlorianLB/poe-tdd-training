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
        $this->assertSame('bar', $this->bag->get('foo'));
        $this->assertSame(null, $this->bag->get('pony'));
        $this->assertSame('pink', $this->bag->get('pony', 'pink'));


        // // will fail
        // $this->assertEquals('lol', $bag->get('foo'));

    }

    public function testGetInt()
    {

        $this->assertSame( (int)'foo', $this->bag->getInt('foo'));
        $this->assertSame( 3 , $this->bag->getInt('toto', 3));

    }

    public function testSet()
    {
        $this->bag->set('roux','renard');
        $this->assertSame('renard' , $this->bag->get('roux') );
    }

    public function testHas()
    {

        $this->assertTrue( $this->bag->has('foo') );
        $this->assertFalse( $this->bag->has('toto') );

    }

    public function testRemove()
    {
        $this->assertTrue( $this->bag->has('foo') );

        $this->bag->remove('foo');

        $this->assertFalse( $this->bag->has('foo') );

    }

    public function testAll()
    {

        $this->bag->all();

        $paramTab = array (
            'foo'  => 'bar'
        );

        $paramTab2 = array (
            'tata'  => 'toto'
        );

        $this->assertEquals($paramTab ,$this->bag->all());
        $this->assertNotEquals($paramTab2 ,$this->bag->all());

    }

    public function testKeys()
    {

    }

    public function testAdd()
    {

    }
}
