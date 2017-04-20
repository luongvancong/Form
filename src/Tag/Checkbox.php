<?php

namespace Justin\Form\Tag;

class Checkbox extends Input {

    public function getAttributes()
    {
        $this->attributes['type'] = 'checkbox';

        // Kiểm tra để hiện trạng thái checked
        if($this->existAttribute('default') && $this->existAttribute('value')) {
            if($this->getAttribute('default') == $this->getAttribute('value')) {
                $this->setAttribute('checked', 'checked');
            }
        }

        $this->removeAttribute('default');

        return $this->attributes;
    }
}