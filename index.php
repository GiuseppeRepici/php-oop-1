<?php

include_once __DIR__ . "/Models/Movie.php";

$filmprova = new Movie("prova","azione");
$film2 = new Movie("Una settimana da dio", "Commedia");

echo "{$filmprova->printFullData()},{$film2->printFullData()} ";