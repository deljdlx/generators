<?php
require_once '../vendor/autoload.php';

ini_set('memory_limit', '1024M');
ini_set('display_errors', 1);


$cities = json_decode(file_get_contents(__DIR__ . '/cities.json'), true)['cities'];

$selected = [];

$max = 10;

if(isset($_GET['max'])) {
    $max = (int) $_GET['max'];
}

for($i = 0 ; $i < $max ; $i++) {
    $selected[] = $cities[rand(0, count($cities) - 1)];
}



header('Content-type: application/json');
echo json_encode($selected, JSON_PRETTY_PRINT);


return $selected;