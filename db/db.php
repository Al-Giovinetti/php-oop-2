<?php
include_once __DIR__ . "/../classes/Product.php";
include_once __DIR__ . "/../classes/Category.php";


$forCats = new Category("For Cats","fa-solid fa-shield-cat");
$forDogs = new Category("For Dog","fa-solid fa-shield-dog");


$products = [
    new Product("Crocchette-Cat", "https://picsum.photos/200/300",$forCats,"triangolari ripiene di drago",3.50),
    new Product("Canna con piume", "https://picsum.photos/200/300",$forCats,"canna in bambu marziano",10.00),
    new Product("Tiragraffi", "https://picsum.photos/200/300",$forCats,"tappeto ipoallegenico",8.00),
    new Product("Crocchette-dog", "https://picsum.photos/200/300",$forDogs,"quadratini ripieni di torrone",5.30),
    new Product("Frisbee", "https://picsum.photos/200/300",$forDogs,"Cerchio volante",12.00),
    new Product("Cuccia", "https://picsum.photos/200/300",$forDogs,"casa abitabile",19.00)
]


?>