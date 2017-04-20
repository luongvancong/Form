<?php

namespace Justin\Form;

class BootstrapForm implements FormInterface {

    public function row()
    {
        return new Row();
    }

}