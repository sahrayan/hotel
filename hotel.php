<?php
class Hotel{
    private $_nom;
    private $_adresse;
    private array $_listeReservation;
    private array $_listeChambre;

    public function __construct($nom,$adresse){
        $this->_nom=$nom;
        $this->_adresse=$adresse;
        //creation des listes
        $this->_listeReservation=[];
        $this->_listeChambre=[];
    }

    public function GetNom(){
        return $this->_nom;
    }
    public function GetAdresse(){
        return $this->_adresse;
    }

    
    // ajout d une chambre dans chambre
        public function AddChambre($chambre){
            $this->_listeChambre[]= $chambre;
        }
        public function AddReservation($reservation){
            $this->_listeReservation[]= $reservation;
        }

    public function dispReservation(){
        $result=$this;
        foreach ($this->_listeReservation as $reservation){
            $result.=$reservation ."<br>";
        }
        return $result;
    }
    public function dispChambre(){
        $result=$this;
        foreach ($this->_listeChambre as $chambre){
            $result.=$chambre."<br>";
        }
        return $result;
    }
    //permet de compter le nomnbre de reservations et de chambre dispo
    public function countReservations(){
        return count($this->_listeReservation);
    }    
    public function countChambres(){
        return count($this->_listeChambre);
    }
    public function getInfo(){
        return $this->GetNom()."<br> ".$this->GetAdresse()."<br> ";
    }
    public function __toString()
    {
        return $this->getInfo();
    }

}

?>