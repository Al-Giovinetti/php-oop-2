<?php 
class Product{
    //propietà
    public $name;
    public $price;
    public $description;

    //costruttore
    function __construct(String $_name, Float $_price, String $_description){
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;    
    }
}
?>