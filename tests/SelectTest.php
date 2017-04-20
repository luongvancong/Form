<?php

use Justin\Form\Tag\Option;
use Justin\Form\Tag\OptionCollection;
use Justin\Form\Tag\Select;
use PHPUnit\Framework\TestCase;
use \Mockery as m;

class SelectTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        $data = new OptionCollection([
            1 => "HN",
            2 => "HCM",
            3 => "DN"
        ], 1);
        $data->class('option_class');
        $this->select = new Select($data);
    }

    public function tearDown()
    {
        $this->select = null;
    }

    public function test_chaining()
    {
        $option = $this->select->class('form-control')->id('select');

        $this->assertEquals('<select class="form-control" id="select"><option class="option_class" selected="selected" value="1">HN</option><option class="option_class" value="2">HCM</option><option class="option_class" value="3">DN</option></select>', $option);
    }
}