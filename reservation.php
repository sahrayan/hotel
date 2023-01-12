<?php
class Reservation{
    private Client $_client;
    private Hotel $_hotel;
    private Chambre $_chambre;
    private $_entree;
    private $_sortie;
    
    public function __construct(Client $client, Hotel $hotel, Chambre $chambre, $entree, $sortie){
        $this->_client = $client;
        $this->_client->InfoClient($this);
        $this->_hotel = $hotel;
        $this->_hotel-> AddReservation($this);
        $this->_chambre = $chambre;
        $this->_chambre -> AddReservation($this);
        $this->_entree = new DateTime($entree);
        $this->_sortie = new DateTime ($sortie);
    }
    
    public function getEntree(){
        return $this->_entree;
    }
    public function getSortie(){
        return $this->_sortie;
    }
    // reservation info client
    public function getInfoReservation(){
        return $this->_client. "".$this->_hotel."".$this->_chambre."Du ".$this->getEntree()->format("d/m/y")." au ".$this->getSortie()->format("d/m/y").".<br>";

    }
    public function __toString()
    {
        return $this->getInfoReservation();
    }
    
}