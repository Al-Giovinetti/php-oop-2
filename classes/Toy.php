<?php

include_once __DIR__ . "/Product.php";

Class Toy extends Product {
    public $material;
    public $itSound;

    function __construct(String $_name, String $_img, Category $_category, String $_description, Float $_price, String $_material, Bool $_itSound){
        parent :: __construct($_name, $_img, $_category, $_description, $_price);
        $this->material = $_material;
        $this->itSound = $_itSound;
    }

    public function thereIsSound(){
        if ($this->itSound == False){
            return "no";
        }else{
            return "yes";
        }
    }

}
?>