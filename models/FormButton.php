<?php
/**
 * Created by PhpStorm.
 * User: vesel
 * Date: 06.11.2015
 * Time: 18:07
 */


class FormButton extends FormComponent {

    public $text;

    function __construct($id, $css, $text) {
        parent::__construct($id, $css);

        $this->text = $text;
    }


}