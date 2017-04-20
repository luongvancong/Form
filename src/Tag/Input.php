<?php

namespace Justin\Form\Tag;

use Justin\Form\Util;

abstract class Input extends Tag {

    /**
     * @var array
     */
    protected $attributes = array();

    /**
     * Attributes
     * @return array
     */
    abstract function getAttributes();

    public function __toString()
    {
        return '<input '.Util::makeAttributes($this->getAttributes()).' />';
    }
}