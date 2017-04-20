<?php

namespace Justin\Form\Tag;

abstract class Tag {

    protected $attributes = array();

    public function __call($name, $args)
    {
        if($name == 'extra') {
            // Example: ['data-id' => 1]
            $this->attributes[$args[0]] = $args[1];
        }
        else {
            $this->attributes[$name] = $args[0];
        }
        return $this;
    }

    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function getAttribute($key)
    {
        return isset($this->attributes[$key]) ? $this->attributes[$key] : null;
    }

    public function removeAttribute($key)
    {
        if(isset($this->attributes[$key])) {
            unset($this->attributes[$key]);
        }
    }

    public function existAttribute($key)
    {
        return isset($this->attributes[$key]) ? true : false;
    }
}