<?php
include_once __DIR__ . "/../classes/Product.php";
include_once __DIR__ . "/../classes/Category.php";

$categories = [
    new Category("For Cats",""),
    new Category("For Dog",""),
];

$products = [
    new Product("Crocchette",
    "",
    $categories[0],
    "triangolari ripiene di pollo",
    3.5)
]


?>