<?php

include_once __DIR__ . "/Product.php";

Class Structure extends Product {
    public $material;
    public $heigthInCm;

    function __construct(String $_name, String $_img, Category $_category, String $_description, Float $_price, String $_age, String $_material, Int $_heigthInCm){
        parent :: __construct($_name, $_img, $_category, $_description, $_price, $_age);
        $this->material = $_material;
        $this->heigthInCm = $_heigthInCm;
    }
}
?>