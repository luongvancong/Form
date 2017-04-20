<?php

namespace Justin\Form\Tag;

class Hidden extends Input {

    public function getAttributes()
    {
        $this->attributes['type'] = 'hidden';
        return $this->attributes;
    }
}