<?php
Class Structure extends Product {
    public $material;
    public $heigthInCm;

    function __construct(String $_name, String $_img, Category $_category, String $_description, Float $_price, String $_material, Int $_heigthInCm){
        parent :: __construct($_name, $_img, $_category, $_description, $_price);
        $this->material = $_material;
        $this->heigthInCm = $_heigthInCm;
    }
}
?>