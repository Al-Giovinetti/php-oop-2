<?php
include_once __DIR__ . "/../classes/Product.php";
include_once __DIR__ . "/../classes/Category.php";

$categories = [
    new Category("For Cats","fa-solid fa-shield-cat"),
    new Category("For Dog","fa-solid fa-shield-dog"),
];

$products = [
    new Product("Crocchette",
    "",
    $categories[0],
    "triangolari ripiene di pollo",
    3.5)
]


?>