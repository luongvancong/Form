<?php

use Justin\Form\Tag\Textarea;
use PHPUnit\Framework\TestCase;

class TextareaTest extends TestCase {
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        $this->textarea = null;
    }

    public function test_chaining()
    {
        $this->textarea = new Textarea("Content");
        $textarea = $this->textarea->cols(10)->rows(10)->class("form-control");

        $this->textarea = new Textarea("Content");
        $textarea2 = $this->textarea->cols(10)->rows(10)->class("form-control")->extra('data-id', 1);

        $this->textarea = new Textarea("Content");
        $textarea3 = $this->textarea->cols(10)->rows(10)->class("form-control")->extra('data_id', 1);

        $this->assertEquals('<textarea class="form-control" cols="10" rows="10">Content</textarea>', $textarea);
        $this->assertEquals('<textarea class="form-control" cols="10" data-id="1" rows="10">Content</textarea>', $textarea2);
        $this->assertEquals('<textarea class="form-control" cols="10" data_id="1" rows="10">Content</textarea>', $textarea3);
    }
}