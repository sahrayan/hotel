<?php
class Reservation{
    private Client $_client;
    private Hotel $_hotel;
    private Chambre $_chambre;
    private $_entree;
    private $_sortie;
    
    public function __construct(Client $client, Hotel $hotel, Chambre $chambre, $entree, $sortie){
        $this->_client = $client;
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
    public function getInfoReservations(){
        echo "Statuts :" .$this;
        $result= "<table border=10>
        <thead>
        <tr>
        <th>Chambre</th>
        <th>Hotel</th>
        
        </tr>
        </thead><tbody>";
        foreach($this->_chambre as $chambre){
            $result .= "<tr>
            <td>$chambre</td>
            <td>$Hotel</td>
            </tr>";
        }
        $result .= "</tbody></table>";
        echo $result;
    }
    public function __toString()
    {
        return $this->getInfoReservations();
    }
    
}