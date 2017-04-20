<?php

namespace Justin\Form\Tag;

use Justin\Form\Util;

class Form extends Tag {

    public function __construct($content = '')
    {
        $this->content = $content;
    }

    public function __toString()
    {
        return '<form '.Util::makeAttributes($this->attributes).'>'.$this->content.'</form>';
    }
}