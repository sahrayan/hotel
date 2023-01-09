<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

// client
$client1=new Client('RAIHANI','Rayan');
$client2=new client('DERDECH','Foued');

// hotel
$hotel1 = new Hotel('Hilton','10 rue de la Gare 67000 STRASBOURG');
$hotel2 = new Hotel('Regent','Paris');

// chambre
$chambre1 = new Chambre('Chambre n°22','2 lit','78 euro','Sans Wifi','Libre',$hotel1);
$chambre2 = new Chambre('Chambre n°43','1 lit','64 euro','Avec Wifi','libre ',$hotel1);
$chambre3 =new Chambre('Chambre n°01','1 lit','250 euro','Avec Wifi','Libre',$hotel2);

// reservation
$reservation1 = new Reservation($client1,$hotel1,$chambre1,"12-01-2022","14-01-2022");
$reservation2 =new Reservation($client2,$hotel2,$chambre2,"28-12-2022","14-01-2023");










// echo $hotel2->getInfo();
// echo $chambre3->getInfoChambre();
// echo $chambre2->getInfoChambre();
// echo $reservation1->getInfoReservations();
// echo $hotel1->countReservations();
// echo $hotel1->countChambres();
// echo $hotel1->dispChambre();
 echo $client1->InfoClient();
