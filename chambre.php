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

    public function __construct($chambre, $nombre, $prix, $wifi, $verifstatus,Hotel $hotel){
     $this->_chambre = $chambre;
     $this->_nombre = $nombre;
     $this->_prix = $prix;
     $this->_wifi = $wifi;
     $this->_status = 'Libre';
     $this->_hotel = $hotel;
     $this->_hotel -> AddChambre($this);
     $this->_ListReservation =[];
    }
    public function AddReservation($reservation){
        $this->_status = 'Réservée';
        $this->_ListReservation[] = $reservation;
    }
    public function getChambre(){
        return $this->_chambre;
    }
    public function getNombre(){
        return $this->_nombre;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function getWifi(){
        return $this->_wifi;
    }
    public function getStatus(){
        return $this->_status;
    }
    public function verfistatus(){


    }
    public function getInfoChambre(){
        return $this->getChambre()." ".$this ->getNombre()." ".$this->getPrix()." ".$this->getWifi()." ".$this->_status."<br>";
    }
    public function __toString()
    {
        return $this->getInfoChambre();
    }
}