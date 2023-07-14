<?php 
class Product{
    //propietà
    public $name;
    public $img;
    public $category;
    public $description;
    public $price;

    //costruttore
    function __construct(String $_name, String $_img, Category $_category, String $_description,  Float $_price){
        $this->name = $_name;
        $this->img =  $_img;
        $this->category = $_category;
        $this->description = $_description;  
        $this->price = $_price;  
    }
}
?>