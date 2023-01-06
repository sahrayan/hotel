<?php
//classe du client juste nom prenom
class client{
    private $_nom;
    private $_prenom;

    public function __construct($nom,$prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public function InfoClient(){
        return $this->$_nom.' '.$this->$_prenom;
    }
}