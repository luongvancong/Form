<?php

namespace Justin\Form;

class BootstrapForm extends Form {

    public function horizontal($action = "", $method = "POST", array $attributes = array())
    {
        $default = ['class' => 'form form-horizontal'];
        if(isset($attributes['class'])) {
            $attributes = array_merge_recursive($default, $attributes);
        } else {
            $attributes = array_merge($default, $attributes);
        }

        $attributes['action'] = $action;
        $attributes['method'] = $method;

        return $this->open($action, $method, $attributes);
    }

    public function inline($action = "", $method = "POST", array $attributes = array())
    {
        $default = ['class' => 'form form-inline'];
        if(isset($attributes['class'])) {
            $attributes = array_merge_recursive($default, $attributes);
        } else {
            $attributes = array_merge($default, $attributes);
        }

        $attributes['action'] = $action;
        $attributes['method'] = $method;

        return $this->open($action, $method, $attributes);
    }
}