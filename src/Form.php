<?php

namespace Justin\Form;

class Form implements FormInterface {

    protected $rowTemplate;

    public function setRowTemplate($template)
    {
        $this->rowTemplate = $template;
        return $this;
    }

    public function getRowTemplate()
    {
        return $this->rowTemplate;
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