<?php

namespace Justin\Form\Tag;

use Justin\Form\Util;

class Textarea extends Tag {

    /**
     * Content
     * @var string
     */
    protected $content;

    /**
     * @var array
     */
    protected $attributes = array();

    public function __construct($content = '')
    {
        $this->content = $content;
    }

    public function __toString()
    {
        return '<textarea '. Util::makeAttributes($this->attributes) .'>'.$this->content.'</textarea>';
    }
}