<?php

namespace Justin\Form;

class Util {

    public static function makeAttributes($attributes) {
        ksort($attributes);

        $stringAttribute = '';

        if(is_array($attributes)) {
            foreach($attributes as $key => $value) {
                $stringAttribute .= "$key=\"$value\" ";
            }
        }else{
            $stringAttribute = @strval($attributes);
        }

        return trim($stringAttribute, ' ');
    }
}