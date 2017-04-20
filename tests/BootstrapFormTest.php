<?php

use PHPUnit\Framework\TestCase;

class BootstrapFormTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        $this->form = new Justin\Form\BootstrapForm;
    }

    public function tearDown()
    {
        unset($this->form);
    }

    public function test_horizontal()
    {
        $this->assertEquals('<form action="" class="form form-horizontal" method="POST">', $this->form->horizontal());
    }
}