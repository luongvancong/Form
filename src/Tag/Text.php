<?php

namespace Justin\Form\Tag;

class Text extends Input {

    public function getAttributes()
    {
        $this->attributes['type'] = 'text';
        return $this->attributes;
    }
}