<?php

namespace Justin\Form\Tag;

use Justin\Form\Tag\Option;
use Justin\Form\Util;

class Select extends Tag {

    /**
     * @var array
     */
    protected $attributes = array();

    /**
     * @var array
     */
    protected $options;

    public function __construct(OptionCollection $options)
    {
        $this->options = $options;
    }

    public function __toString()
    {
        return '<select '.Util::makeAttributes($this->attributes).'>'.$this->options.'</select>';
    }
}