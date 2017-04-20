<?php

namespace Justin\Form\Tag;

use Justin\Form\Util;

class OptionCollection extends Tag {

    /**
     * @var array
     */
    protected $attributes = array();

    protected $data = array();

    protected $default;

    public function __construct(array $data, $default = null)
    {
        $this->data = $data;
        $this->default = $default;
    }

    public function getData()
    {
        return $this->data;
    }

    public function __toString()
    {
        $options = [];
        foreach($this->data as $key => $value) {
            $option = new Option($value);

            // Attributes của collection chính là của từng option
            foreach($this->attributes as $attrKey => $attrValue) {
                $option->setAttribute($attrKey, $attrValue);
            }

            $option->value($key);

            if( $this->default == $option->getAttribute('value') ) {
                $option->selected('selected');
            }

            $options[] = $option;
        }

        return implode('', $options);
    }
}