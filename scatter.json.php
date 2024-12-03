<?php
require_once 'vendor/autoload.php';

$number = 20;

if(isset($_GET['n'])) {
    $number = intval($_GET['n']);
}

$data = [];


$faker = Faker\Factory::create();

for($i = 0 ; $i < $number ; $i++) {
    $x = rand(-12, 12);
    $y = rand(-12, 12);
    $gender = rand(0, 1) ? 'male' : 'female';
    $firsname = $faker->firstName($gender);
    $lastname = $faker->lastName;

    $data[] = [
        'value' => [$x, $y],
        'firstname' => $firsname,
        'lastname' => $lastname,
    ];
}

header('Content-type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);


