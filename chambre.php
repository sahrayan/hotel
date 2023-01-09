<?php
// classe chambre avec la chambre nombre, la liste de reservation ,prix,wifi,le statut reserver ou non, l hotel ,la liste de reservation
class Chambre{
    private $_chambre;
    private $_nombre;
    private $_prix;
    private $_wifi;
    private $_status;
    private Hotel $_hotel;
    private array $_ListReservation;

    public function __construct($chambre, $nombre, $prix, $wifi, $status,Hotel $hotel){
     $this->_chambre = $chambre;
     $this->_nombre = $nombre;
     $this->_prix = $prix;
     $this->_wifi = $wifi;
     $this->_status = $status;
     $this->_hotel = $hotel;
     $this->_hotel -> AddChambre($this);
     $this->_ListReservation =[];
    }
    public function AddReservation($reservation){
        $this->_ListReservation[] = $reservation;
    }
    private function getChambre(){
        return $this->_chambre;
    }
    private function getNombre(){
        return $this->_nombre;
    }
    private function getPrix(){
        return $this->_prix;
    }
    private function getWifi(){
        return $this->_wifi;
    }
    private function getStatus(){
        return $this->_status;
    }
    public function getInfoChambre(){
        return $this->getChambre()." ".$this ->getNombre()." ".$this->getPrix()." ".$this->getWifi()." ".$this->getStatus()."<br>";
    }
    public function __toString()
    {
        return $this->getInfoChambre();
    }
}