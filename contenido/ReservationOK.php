<?php
include '../lib/constantes.php';
include '../lib/ReservationClass.php';

$reservationName = $_POST['name'];
$reservationEmail = $_POST['email'];
$reservationRegion = $_POST['region'];
$reservationLenguaje = $_POST['lenguaje'];
$reservationDateIn = $_POST['dateIn'];
$reservationDateOut = $_POST['dateOut'];

if(isset($_SESSION["aReserv"])){
    $arrReserv=$_SESSION["aReserv"];
}
$oReserv=new Reservation($reservationName,$reservationEmail,$reservationRegion,$reservationLenguaje,$reservationDateIn,$reservationDateOut);
$arrReserv[]=$oReserv;
$_SESSION["aReserv"]=$arrReserv;

echo "<h3> RESERVATION OK </h3>";
echo "<p>Your reservation has been made correctly.</p>";
echo "<p>Reservation Detail<p>";
echo "<p>Name: ".$reservationName."<p>";
echo "<p>Email: ".$reservationEmail."<p>";
echo "<p>Source Region: ".$reservationRegion."<p>";
echo "<p>English Lenguaje: ".$reservationLenguaje."<p>";
echo "<p>Date Check In: ".$reservationDateIn."<p>";
echo "<p>Date Check Out: ".$reservationDateOut."<p>";
?>

