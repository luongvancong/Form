<?php

namespace Justin\Form;

class Form implements FormInterface {

    public function row()
    {
        return new Row();
    }

    public function open($action = "", $method = "POST", array $attributes = array())
    {
        $attributes['action'] = $action;
        $attributes['method'] = $method;
        return '<form '. Util::makeAttributes($attributes) .'>';
    }

    public function close()
    {
        return '</form>';
    }

}