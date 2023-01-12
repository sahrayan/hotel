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
    public function InfoClient(){
       $disp ="<br> Le client ".$this->getNom()." ".$this->getPrenom(). " a reservé :";
       foreach($this->_ListReservation as $reservation){
           $disp.= $reservation;
       }
       return $disp;
    }
    public function __toString()
    {
        return $this->InfoClient();
    }

}