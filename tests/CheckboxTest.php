<?php

use Justin\Form\Tag\Checkbox;
use PHPUnit\Framework\TestCase;

class CheckboxTest extends TestCase {

    public function setUp()
    {
        $this->checkbox = new Checkbox();
    }

    public function tearDown()
    {
        unset($this->checkbox);
    }

    public function test_checkbox()
    {
        $actual = $this->checkbox->name('gender')->value(1)->default(0);
        $expected = '<input name="gender" type="checkbox" value="1" />';
        $this->assertEquals($expected, $actual);
    }

    public function test_checkbox_checked()
    {
        $actual = $this->checkbox->name('gender')->value(1)->default(1);
        $expected = '<input checked="checked" name="gender" type="checkbox" value="1" />';
        $this->assertEquals($expected, $actual);
    }
}