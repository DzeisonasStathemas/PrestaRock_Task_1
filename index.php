<?php

require 'src/bootstrap.php';

$personsData = [
    [
        'Name' => 'Trikse',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
    ],
    [
        'Name' => 'Vardenis',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
    ],  
    [
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Jonas',
        'Color' => 'Pink'
    ],
];

$dataFormatterService = new App\Services\DataFormatterService();
$tableCreatorService = new App\Services\TableCreatorService();

$personController = new App\Controllers\PersonController($dataFormatterService, $tableCreatorService);
$personController->index($personsData);

?>