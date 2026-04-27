<?php
class Position {
    private $id;
    private $latitude;
    private $longitude;
    private $date;
    private $imei;

    function __construct($id, $lat, $lon, $date, $imei) {
        $this->id = $id;
        $this->latitude = $lat;
        $this->longitude = $lon;
        $this->date = $date;
        $this->imei = $imei;
    }

    function getLatitude() { return $this->latitude; }
    function getLongitude() { return $this->longitude; }
    function getDate() { return $this->date; }
    function getImei() { return $this->imei; }
}