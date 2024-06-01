<?php
require_once 'models/genere.php';
require_once 'models/movie.php';
// creiamo un'istanza della classe Generi
$generi = new Genere('horror', 'fantasy ', 'action');
$moovies = new Movie('lo hobbit ','avengers');

var_dump($generi->fullGen()); 
var_dump($moovies->fullMov()); 