<?php

declare(strict_types=1);
require "../src/OSTSeeder.php";

header('Content-Type: application/json');

$id = $_GET["ostID"];
switch ($id) {
    case 'all':
        echo json_encode(OSTSeeder::getOSTs());
        break;
    default:
        echo json_encode(OSTSeeder::getOSTs()[$id]);
        break;
}
