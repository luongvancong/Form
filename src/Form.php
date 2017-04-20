<?php

namespace Justin\Form;

class Form implements FormInterface {

    public function setRowTemplate($template)
    {
        $this->template = $template;
        return $this;
    }

    public function getRowTemplate()
    {
        return $this->template;
    }

    public function row()
    {
        return new Row($this->getRowTemplate());
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