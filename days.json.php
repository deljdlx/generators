<?php

$data = [
    'Lundi' => rand(0, 100),
    'Mardi' => rand(0, 100),
    'Mercredi' => rand(0, 100),
    'Jeudi' => rand(0, 100),
    'Vendredi' => rand(0, 100),
    'Samedi' => rand(0, 100),
    'Dimanche' => rand(0, 100),
];

header('Content-type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);
