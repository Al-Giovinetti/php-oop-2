<?php 
include_once __DIR__ ."/traits/Target.php";
class Product{
    //propietà
    public $name;
    public $img;
    public $category;
    public $description;
    public $price;

    use Target;

    //costruttore
    function __construct(String $_name, $_img, Category $_category, String $_description,  Float $_price, String $_age){
        $this->name = $_name;
        $this->img =  $_img;
        $this->category = $_category;
        $this->description = $_description;  
        $this->price = $_price; 
        $this->age = $_age; 
    }

    public function getRandomImg(){
         return $this->img;
    }
}
?>