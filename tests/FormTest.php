<?php

use Justin\Form\Tag\Form;
use Justin\Form\Util;
use PHPUnit\Framework\TestCase;
use \Mockery as m;

class FormTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        m::close();
    }

    public function test_form()
    {
        $form = new Form();
        $f = $form->class('form form-horizontal')->method('POST')->action('');
        $this->assertEquals('<form action="" class="form form-horizontal" method="POST"></form>', $f);
    }
}