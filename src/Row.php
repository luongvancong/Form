<?php

namespace Justin\Form;

class Row {

    protected $label;

    protected $control;

    protected $template;

    protected $error;

    public function __construct($template = null)
    {
        $this->m = new \Mustache_Engine();

        if(!$template) {
            $template = file_get_contents(__DIR__ . '/views/form-group.tpl');
            $this->setTemplate($template);
        } else {
            $this->setTemplate($template);
        }
    }

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setControl($control)
    {
        $this->control = $control;
        return $this;
    }

    public function getControl()
    {
        return $this->control;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    public function getError()
    {
        return $this->error;
    }

    public function render()
    {
        $label = $this->getLabel();
        $control = $this->getControl();
        $error = $this->getError();
        return $this->m->render($this->getTemplate(), compact('label', 'control', 'error'));
    }
}