<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>hotel de rayan</title>
</head>
<body>
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
$chambre6 = new Chambre('Chambre n°6','1 lit','142 euro','Avec Wifi','libre ',$hotel1);
$chambre7 = new Chambre('Chambre n°7','2 lit','198 euro','Sans Wifi','libre ',$hotel1);


$chambre3 =new Chambre('Chambre n°01','1 lit','250 euro','Avec Wifi','Libre',$hotel2);
$chambre4 =new Chambre('Chambre n°08','1lit','50 euro','Avec Wifi','Libre',$hotel2);
$chambre5 =new Chambre('Chambre n°44',"1lit","50 euro","Avec Wifi","Libre",$hotel2);
// reservation
$reservation1 = new Reservation($client1,$hotel2,$chambre1,"12-01-2022","14-01-2022");
$reservation2 =new Reservation($client2,$hotel2,$chambre6,"28-12-2022","14-01-2023");


$reservation3 =new Reservation($client2,$hotel2,$chambre3,"27-12-2012","14-01-2013");


// echo $client1->InfoClient();
// echo $client2->InfoClient();


// echo $chambre1->getInfoChambre();
// echo $chambre2->getInfoChambre();
// echo $chambre4->getInfoChambre();

// echo $hotel1->afficherReservationHotel();
// echo $hotel2->afficherReservationHotel();

//  echo $hotel1->getInfo();
// echo $hotel2->getInfo();

echo "**************************************";
echo $hotel1->getInfoHotel().
"**************************************";
echo $hotel1->afficherReservationHotel();
"*****************************************";
echo "**************************************";
echo $hotel2->getInfoHotel().
"*****************************************"; 
echo $hotel2->afficherReservationHotel();
"*****************************************";
echo "**************************************";



echo $hotel1->afficherTabChambre();