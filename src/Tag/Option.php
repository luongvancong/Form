<?php

namespace Justin\Form\Tag;

use Justin\Form\Util;

class Option extends Tag {

    /**
     * @var array
     */
    protected $attributes = array();

    /**
     * @var string
     */
    protected $label;

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function __toString()
    {
        return '<option '.Util::makeAttributes($this->attributes).'>'.$this->label.'</option>';
    }
}