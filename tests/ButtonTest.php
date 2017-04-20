<?php

use Justin\Form\Tag\Button;
use PHPUnit\Framework\TestCase;
use \Mockery as m;

class ButtonTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        $this->button = new Button("Button testing");
    }

    public function tearDown()
    {
        $this->button = null;
    }

    public function test_chaining()
    {
        $button = $this->button->type('button')->class('btn btn-primary')->id('btn-1');
        $this->assertEquals('<button class="btn btn-primary" id="btn-1" type="button">Button testing</button>', $button);
    }
}