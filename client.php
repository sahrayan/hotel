<?php
//classe du client juste nom prenom
class Client{
    private $_nom;
    private $_prenom;
    private array $_ListReservation;

    public function __construct($nom,$prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_ListReservation=[];
    }
    public function addReservation($reservation){
        $this->_ListReservation[] = $reservation;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function __toString()
    {
        return $this->getNom()." ".$this->getPrenom();
    }

    public function InfoClient(){
       echo $this;
       foreach($this->_ListReservation as $reservation){
           echo $reservation;
       }
       
    }
}