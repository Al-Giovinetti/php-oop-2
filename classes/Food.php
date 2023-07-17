<?php

include_once __DIR__ . "/Product.php";
Class Food extends Product {
    public $calories;
    public $fat;

    function __construct(String $_name, String $_img, Category $_category, String $_description, Float $_price, String $_age, Int $_calories, Int $_fat){
        parent :: __construct($_name, $_img, $_category, $_description, $_price, $_age);
        $this->calories = $_calories;
        $this->fat = $_fat;
    }

}
?>