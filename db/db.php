<?php
include_once __DIR__ . "/../classes/Product.php";
include_once __DIR__ . "/../classes/Category.php";

$categories = [
    new Category("For Cats","fa-solid fa-shield-cat"),
    new Category("For Dog","fa-solid fa-shield-dog"),
];

$products = [
    new Product("Crocchette-Cat", "https://picsum.photos/200/300",$categories[0],"triangolari ripiene di drago",3.50),
    new Product("Canna con piume", "https://picsum.photos/200/300",$categories[0],"canna in bambu marziano",10.00),
    new Product("Tiragraffi", "https://picsum.photos/200/300",$categories[0],"tappeto ipoallegenico",8.00),
    new Product("Crocchette-dog", "https://picsum.photos/200/300",$categories[1],"quadratini ripieni di torrone",5.30),
    new Product("Frisbee", "https://picsum.photos/200/300",$categories[1],"Cerchio volante",12.00),
    new Product("Cuccia", "https://picsum.photos/200/300",$categories[1],"casa abitabile",19.00)
]


?>