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
        return "il y a ".count($this->_listeReservation)." chambres reservé<br>";
    }    
    public function countChambres(){
        return "il y a ".count($this->_listeChambre)." chambres.";
    }
    
    public function getInfoHotel(){
        return $this->getInfo() . " ".$this->countChambres()." <br>".$this->countReservations();
    }
    public function getInfo(){
        return '<br>Hotel:  '.$this->GetNom()."<br> Adresse:  ".$this->GetAdresse()."<br> ";
    }
    public function __toString()
    {
        return $this->getInfo();
    }


    public function afficherReservationHotel()
{
    echo "<h3>Réservations de l'hotel ".$this."</h3>"; 
    echo "<span class='rectangle'>".(count($this->_listeReservation))." Réservations</span><br>";       
    foreach( $this->_listeReservation as $reservation)
    {
       echo $reservation;
    }

}
   
function afficherTabChambre() {
    $result = "<table border=1>
                <thead>
                    <tr>
                    <th>Chambre</th>
                     <th>Nombre</th>
                     <th>Prix</th>
                     <th>Wifi</th>
                     <th>Etat</th>
                    </tr>
                </thead>
          <tbody>" ;
foreach ($this->_listeChambre as $chambre){
    if ($chambre->getStatus() == "Libre")
                {
                    $disp= "<div class='rectangle'>Disponible</div>";
                } 

                 else 

                {
                    $disp= "<div class='rectangle2'>Réservée</div>";
                }
    $result .= "<tr>
                    <td>".$chambre->getChambre()."</td> 
                    <td>".$chambre->getNombre()."</td>
                    <td>".$chambre->getPrix()."</td>
                    <td>".$chambre->getWifi()."</td>
                    <td>".$disp."</td>
                    
                </tr>";
                

            "</th>
          </tr>";

}

$result .= "</tbody></table>";
return $result;
}


}

?>