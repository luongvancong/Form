<?php

use Justin\Form\Tag\Option;
use PHPUnit\Framework\TestCase;
use \Mockery as m;

class OptionTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        $this->option = new Option("Option");
    }

    public function tearDown()
    {
        $this->option = null;
    }

    public function test_chaining()
    {
        $option = $this->option->class('option')->id('option-1');
        $this->assertEquals('<option class="option" id="option-1">Option</option>', $option);
    }
}