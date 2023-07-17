<?php
Class Food extends Product {
    public $calories;
    public $fat;

    function __construct(String $_name, String $_img, Category $_category, String $_description, Float $_price, Int $_calories, Int $_fat){
        parent :: __construct($_name, $_img, $_category, $_description, $_price);
        $this->calories = $_calories;
        $this->fat = $_fat;
    }

}
?>