<?php

use PHPUnit\Framework\TestCase;

class MustacheTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        $this->m = new Mustache_Engine;
    }

    public function tearDown()
    {
        unset($this->m);
    }

    public function testRender()
    {
        $m = new Mustache_Engine;
        $actual = $m->render('Hello, {{planet}}!', array('planet' => 'World'));
        $expected = 'Hello, World!';

        $this->assertEquals($expected, $actual);
    }
}