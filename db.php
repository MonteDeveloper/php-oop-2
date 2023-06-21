<?php

// Creazione di tre istanze della classe Category
$categoryDog = new Category("Cani", "Prodotti e accessori per cani", "images/icona_cani.jpg");

$categoryCat = new Category("Gatti", "Prodotti e accessori per gatti", "images/icona_gatti.jpg");

$categoryHamster = new Category("Criceti", "Prodotti e accessori per criceti", "images/icona_criceti.jpg");

// Creazione di tre istanze della classe Food
$food1 = new Food("Crocchette per gatti", 10.99, "Crocchette di pollo per gatti adulti", $categoryCat, "images/crocchette_gatti.jpg", "2024-12-31");
$food2 = new Food("Cibo umido per cani", 2.99, "Cibo umido al manzo per cani adulti", $categoryDog, "images/cibo_umido_cani.jpg", "2024-11-30");
$food3 = new Food("Snack per criceti", 4.99, "Snack di verdure per criceti", $categoryHamster, "images/snack_criceti.jpg", "2025-01-31");

// Creazione di tre istanze della classe Toy
$toy1 = new Toy("Palla da tennis per cani", 1.99, "Palla da tennis resistente per cani", $categoryDog, "images/palla_tennis_cani.jpg", 0, "Gomma");
$toy2 = new Toy("Topo di peluche per gatti", 3.99, "Topo di peluche con sonaglio interno per gatti", $categoryCat, "images/topo_peluche_gatti.jpg", 0, "Tessuto");
$toy3 = new Toy("Giostra per criceti", 7.99, "Giostra in legno con ruota per criceti", $categoryHamster, "images/giostra_criceti.jpg", 0, "Legno");

// Creazione di tre istanze della classe Collar
$collar1 = new Collar("Collare in pelle per cani grandi", 14.99, "Collare in pelle resistente per cani di taglia grande", $categoryDog, "images/collare_pelle_cani_grandi.jpg", "Grande", "Marrone");
$collar2 = new Collar("Collare riflettente per gatti", 9.99, "Collare riflettente con campanellino per gatti", $categoryCat, "images/collare_riflettente_gatti.jpg", "Piccolo", "Verde");
$collar3 = new Collar("Collare a bandana per criceti piccoli", 12.99, "Collare con bandana decorativa per criceti di taglia piccola", $categoryHamster, "images/collare_bandana_criceti_piccoli.jpg", "Piccolo", "Rosso");


?>