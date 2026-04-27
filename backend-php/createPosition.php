<?php

header('Content-Type: application/json');
require_once __DIR__ . '/service/PositionService.php';
require_once __DIR__ . '/class/Position.php';


$lat = $_POST['latitude'] ?? null;
$lon = $_POST['longitude'] ?? null;
$date = $_POST['date'] ?? null;
$imei = $_POST['imei'] ?? null;

if ($lat == null || $lon == null || $date == null || $imei == null) {
    echo json_encode(["ok"=>false]);
    exit;
}

$service = new PositionService();
$service->create(new Position(null, $lat, $lon, $date, $imei));

echo json_encode(["ok"=>true]);