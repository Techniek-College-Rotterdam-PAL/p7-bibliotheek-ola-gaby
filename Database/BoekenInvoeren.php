<?php 

session_start();
require_once "Conn2.php"; // database connectie (Ola)

// Zorg ervoor dat alle ingevoerde code eruit wordt gehaald(Ola)
$naam = strip_tags($_POST["Naam"]);
$auteur = strip_tags($_POST["Auteur"]);
$samenvatting = strip_tags($_POST["Samenvatting"]);
//$afbeelding = strip_tags($_POST["afbeelding"]);



// Plaats de ingevulde gegevens in de database (Ola)
$insert_user = $conn->prepare("INSERT INTO boeken (Naam,Auteur,Samenvatting,afbeelding) VALUES( :Naam, :Auteur, :Samenvatting, :afbeelding)");

    $insert_user->bindParam(":Naam", $naam);
    $insert_user->bindParam(":Auteur", $auteur);
    $insert_user->bindParam(":Samenvatting", $samenvatting);
   // $insert_user->bindParam(":afbeelding", $afbeelding);
    $insert_user->bindParam(":gebruikersnaam", $gebruikersnaam);
    $insert_user->bindParam(":wachtwoord", $hashed_wachtwoord);

?>