<?php
include_once __DIR__ . "/../classes/Product.php";
include_once __DIR__ . "/../classes/Category.php";
include_once __DIR__ . "/../classes/Food.php";
include_once __DIR__ . "/../classes/Toy.php";
include_once __DIR__ . "/../classes/Structure.php";



$forCats = new Category("For Cats","fa-solid fa-shield-cat");
$forDogs = new Category("For Dog","fa-solid fa-shield-dog");



$products = [
    new Food("Crocchette-Cat", "https://picsum.photos/200/300",$forCats,"triangolari ripiene di drago",3.50,"young",95,10),
    new Toy("Canna con piume", "https://picsum.photos/200/300",$forCats,"canna in bambu marziano",10.00,"young","bambu",False),
    new Toy("Tiragraffi", "https://picsum.photos/200/300",$forCats,"tappeto ipoallegenico",8.00,"all","alcantara",False),
    new Food("Crocchette-dog", "https://picsum.photos/200/300",$forDogs,"quadratini ripieni di torrone",5.30,"adult",120,15),
    new Toy("Frisbee", "https://picsum.photos/200/300",$forDogs,"Cerchio volante",12.00,"young","plastic",False),
    new Structure("Cuccia", "https://picsum.photos/200/300",$forDogs,"casa abitabile",19.00,"all","Abete",150)
]


?>