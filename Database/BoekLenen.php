<?php

session_start();
require_once "Conn.php";

// Zorg ervoor dat alle ingevoerde code eruit wordt gehaald(Ola)
$gebruikersnaam = strip_tags($_POST["gebruikersnaam"]);
$wachtwoord = strip_tags($_POST["wachtwoord"]);
$email = strip_tags($_POST["email"]);
$boeken = strip_tags($_POST["boeken"]);
$begindatum = strip_tags($_POST["begindatum"]);
$einddatum = strip_tags($_POST["einddatum"]);



// Plaats de ingevulde gegevens in de database (Ola)
$insert_user = $conn->prepare("INSERT INTO ////// (boeken, begindatum, einddatum) VALUES( :boeken, :begindatum, :einddatum )");

    $insert_user->bindParam(":boeken", $boeken);
    $insert_user->bindParam(":begindatum", $begindatum);
    $insert_user->bindParam(":einddatum", $einddatum);
  
//Gegevens ophalen uit de daatabase om het vervolgens in een overzicht te zetten voor de docent zodat hij kan zien wie welke boek heeft uitgeleend (Ola)
    $query = $conn->prepare("SELECT * FROM gebruiker WHERE gebruikersnaam = :gebruikersnaam");
    $query->bindParam(":gebruikersnaam", $gebruikersnaam);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    //
    if ($result) {

        //code om de gebruikersnaam in de header van de pagina te laten zien (Ola)
        if (password_verify($wachtwoord, $result['wachtwoord'])) {
         $_SESSION["gebruikersnaam"] = $gebruikersnaam;
        
         header("location: ../Ingelogde_gebruiker.php");

        //bij foute inloggegeven komt er een foutmelding op het scherm (Ola)
         } else {
          header("location: ../FoutInlogFormulier.php");
         }
} 
?>