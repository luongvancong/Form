<?php

namespace Justin\Form\Tag;

use Justin\Form\Util;

class Button extends Tag {

    /**
     * @var string
     */
    protected $label;

    /**
     * @var array
     */
    protected $attributes = array();

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function __toString()
    {
        return '<button '.Util::makeAttributes($this->attributes).'>'.$this->label.'</button>';
    }
}