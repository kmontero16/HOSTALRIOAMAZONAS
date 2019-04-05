<?php

class Reservation{
    private $name;
    private $email;
    private $region;
    private $lenguaje;
    private $checkIn;
    private $checkOut;
    
    function __construct($name, $email, $region, $lenguaje, $checkIn, $checkOut) {
        $this->name = $name;
        $this->email = $email;
        $this->region = $region;
        $this->lenguaje = $lenguaje;
        $this->checkIn = $checkIn;
        $this->checkOut = $checkOut;
    }
    
    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getRegion() {
        return $this->region;
    }

    function getLenguaje() {
        return $this->lenguaje;
    }

    function getCheckIn() {
        return $this->checkIn;
    }

    function getCheckOut() {
        return $this->checkOut;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setLenguaje($lenguaje) {
        $this->lenguaje = $lenguaje;
    }

    function setCheckIn($checkIn) {
        $this->checkIn = $checkIn;
    }

    function setCheckOut($checkOut) {
        $this->checkOut = $checkOut;
    }
}
