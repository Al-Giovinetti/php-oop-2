<?php
include_once __DIR__ . "/../classes/Product.php";
include_once __DIR__ . "/../classes/Category.php";

$categories = [
    new Category("For Cats","fa-solid fa-shield-cat"),
    new Category("For Dog","fa-solid fa-shield-dog"),
];

$products = [
    new Product("Crocchette-Cat","",$categories[0],"triangolari ripiene di drago",3.50),
    new Product("Canna con piume","",$categories[0],"canna in bambu marziano",10.00),
    new Product("Tiragraffi","",$categories[0],"tappeto ipoallegenico",8.00),
    new Product("Crocchette-dog","",$categories[1],"quadratini ripieni di torrone",5.30),
    new Product("Frisbee","",$categories[1],"Cerchio volante",12.00),
    new Product("Cuccia","",$categories[1],"casa abitabile",19.00)
]


?>