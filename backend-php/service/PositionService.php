<?php

require_once __DIR__ . '/../connexion/Connexion.php';
require_once __DIR__ . '/../class/Position.php';

class PositionService {
    private $connexion;

    public function __construct() {
        $this->connexion = new Connexion();
    }

   public function create($p) {
    $sql = "INSERT INTO `position` (latitude, longitude, date, imei) VALUES (?, ?, ?, ?)";
    $stmt = $this->connexion->getConnexion()->prepare($sql);

    $stmt->execute([
        $p->getLatitude(),
        $p->getLongitude(),
        $p->getDate(),
        $p->getImei()
    ]);
}

    public function getAll() {
        $sql = "SELECT * FROM position";
        return $this->connexion->getConnexion()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}