<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});
$client1=new Client('RAIHANI','Rayan');
$hotel1 = new Hotel('Hilton','10 rue de la Gare 67000 STRASBOURG');
$chambre1 = new Chambre('Chambre 22','2 lit','78 euro','Sans Wifi','Libre',$hotel1);
$chambre2 = new Chambre('Chambre 43','1 lit','64 euro','Avec Wifi','Occupée',$hotel1);
echo $client1->InfoClient();
echo $hotel1->getInfo();
echo $chambre1->getInfoChambre();
echo $chambre2->getInfoChambre();
