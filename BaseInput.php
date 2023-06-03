<?php
include_once 'HtmlElement.php';

abstract class BaseInput extends HtmlElement {
    public string $name;
    public string $label;
    public string $value;

    /**
     * BaseInput constructor
     * 
     * @param $name
     * @param $label
     * @param $value
     */

     public function __construct(string $name, string $label = '', string $value ='') 
     {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;

     }
}

?>