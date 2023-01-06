<?php
class Hotel{
    private $_nom;
    private $_adresse;
    private array $_listeReservation;
    private array $_listeChambre;

    public function __construct($nom,$adresse){
        $this->_nom=$nom;
        $this->_adresse=$adresse;
        $this->_listeReservation=[];
        $this->_listeChambre=[];
    }

    public function GetNom(){
        return $this->_nom;
    }
    public function GetAdresse(){
        return $this->_adresse;
    }


    public function AddChambre(){
        $this->_listeChambre[]= $chambre;
    }
    public function AddReservation(){
        $this->_listeReservation[]= $reservation;
    }

    
    public function dispReservation($reservation){
        $result=$this;
        foreach ($this->_listeReservation as $reservation){
            $result.=$reservation ."<br>";
        }
        return $result;
    }
    public function dispChambre($chambre){
        $result=$this;
        foreach ($this->_listeChambre as $chambre){
            $result.=$chambre."<br>";
        }
        return $result;
    }

}

?>