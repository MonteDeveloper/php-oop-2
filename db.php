<?php

include 'models/category.php';
include 'models/productTypes.php';

// Creazione di tre istanze della classe Category
$categoryDog = new Category("Cani", "Prodotti e accessori per cani", "images/icona_cani.jpg");

$categoryCat = new Category("Gatti", "Prodotti e accessori per gatti", "images/icona_gatti.jpg");

$categoryHamster = new Category("Criceti", "Prodotti e accessori per criceti", "images/icona_criceti.jpg");

// Creazione di tre istanze della classe Food
$food1 = new Food("Crocchette per gatti", 10.99, "Crocchette di pollo per gatti adulti", $categoryCat, "https://m.media-amazon.com/images/I/81cq80M6IiS._AC_SX466_.jpg", "2024-12-31");
$food2 = new Food("Cibo umido per cani", 2.99, "Cibo umido al manzo per cani adulti", $categoryDog, "https://parafarmaciapet.com/9711-large_default/cesar-scelta-dello-chef-delizie-di-stagione-con-agnello-carote-e-coriandolo-150-gr.jpg", "2024-11-30");
$food3 = new Food("Snack per criceti", 4.99, "Snack di biscotti per criceti", $categoryHamster, "https://m.media-amazon.com/images/I/511Cy9k3PLL._AC_SY450_PIbundle-2,TopRight,0,0_SH20_.jpg", "2025-01-31");

// Creazione di tre istanze della classe Toy
$toy1 = new Toy("Palla da tennis per cani", 1.99, "Palla da tennis resistente per cani", $categoryDog, "https://m.media-amazon.com/images/I/515LTWySdvL._AC_SY450_.jpg", 1, 2, 3, 2, 0.2, "Gomma", "Giallo");
$toy2 = new Toy("Topo di peluche per gatti", 3.99, "Topo di peluche con sonaglio interno per gatti", $categoryCat, "https://m.media-amazon.com/images/I/61OyJblYgML._AC_SY450_.jpg", 1, 1, 1, 1, 0.1, "Tessuto", "Grigio");
$toy3 = new Toy("Giostra per criceti", 7.99, "Giostra in legno con ruota per criceti", $categoryHamster, "https://m.media-amazon.com/images/I/51mPupeyOBL._AC_SY450_.jpg", .5, 1, 4, 4, 0.3, "Legno", "Marrone");
// Creazione di tre istanze della classe Collar
$collar1 = new Collar("Collare in pelle per cani grandi", 14.99, "Collare in pelle resistente per cani di taglia grande", $categoryDog, "https://m.media-amazon.com/images/I/71e5hRpcnEL._AC_SY450_.jpg", 10, 20, 30, 0.5, "Pelle", "Marrone");
$collar2 = new Collar("Collare riflettente per gatti", 9.99, "Collare riflettente con campanellino per gatti", $categoryCat, "https://m.media-amazon.com/images/I/51F3hN8bhXL._AC_SY450_.jpg", 5, 10, 15, 0.2, "Nylon", "Verde");
$collar3 = new Collar("Collare a bandana per criceti piccoli", 12.99, "Collare con bandana decorativa per criceti di taglia piccola", $categoryHamster, "https://m.media-amazon.com/images/I/71e1nhfPTvL._AC_SY450_.jpg", 2, 4, 6, 0.1, "Tessuto", "Rosso");

$products = array(
    $food1,
    $food2,
    $food3,
    $toy1,
    $toy2,
    $toy3,
    $collar1,
    $collar2,
    $collar3
);


?>