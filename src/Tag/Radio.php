<?php

namespace Justin\Form\Tag;

class Radio extends Input {

    public function getAttributes()
    {
        $this->attributes['type'] = 'radio';

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