<?php
header('Content-Type: application/json');

require_once './service/PositionService.php';

$service = new PositionService();

echo json_encode([
    "positions" => $service->getAll()
]);