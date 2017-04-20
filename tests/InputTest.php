<?php

use Justin\Form\Tag\Checkbox;
use Justin\Form\Tag\Hidden;
use Justin\Form\Tag\Input;
use Justin\Form\Tag\Radio;
use PHPUnit\Framework\TestCase;
use \Mockery as m;

class InputTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        $this->input = null;
    }

    public function test_chaining()
    {
        // $input = $this->input->type('text')->class('form-control')->id('input-1');
        // $this->assertEquals('<input class="form-control" id="input-1" type="text" />', $input);

        $radio = (new Radio())->class('radio');
        $this->assertEquals('<input class="radio" type="radio" />', $radio);

        $checkbox = (new Checkbox())->class('checkbox');
        $this->assertEquals('<input class="checkbox" type="checkbox" />', $checkbox);

        $checkbox = (new Checkbox())->class('checkbox')->value(10);
        $this->assertEquals('<input class="checkbox" type="checkbox" value="10" />', $checkbox);

        $hidden = (new Hidden())->class('test')->value(10);
        $this->assertEquals('<input class="test" type="hidden" value="10" />', $hidden);

        $checkbox = (new Checkbox())->class('checkbox')->value(10)->default(10);
        $this->assertEquals('<input checked="checked" class="checkbox" type="checkbox" value="10" />', $checkbox);
    }
}