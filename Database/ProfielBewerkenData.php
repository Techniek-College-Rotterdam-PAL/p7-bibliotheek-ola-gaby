<?php
session_start();	
require_once "conn.php";



if (isset($_POST['profielbewerken'])) {
    // Zorgt dat alle code wordt weggehaald in ingevoerde gegevens (Gaby);
$gebruikersnaam = strip_tags($_POST['gebruikersnaam']);
$wachtwoord = strip_tags($_POST['wachtwoord']);
$nieuwe_gebruikersnaam = strip_tags($_POST['nieuwe_gebruikersnaam']);


    $query = $conn->prepare("SELECT wachtwoord FROM gebruiker WHERE Gebruikersnaam = :gebruikersnaam");
    $query->bindParam(":gebruikersnaam", $gebruikersnaam);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if (password_verify($wachtwoord, $row['wachtwoord'])) {
        $query = $conn->prepare("UPDATE gebruiker SET Gebruikersnaam = :nieuwe_gebruikersnaam WHERE Gebruikersnaam = :gebruikersnaam");
        $query->bindParam(":nieuwe_gebruikersnaam", $nieuwe_gebruikersnaam);
        $query->bindParam(":gebruikersnaam", $gebruikersnaam);
        $query->execute();

        $_SESSION['gebruikersnaam'] = $nieuwe_gebruikersnaam;

     // Als de ww klopt met de ingevoerde ww verander dan de gebruikersnaam (Ook in de sessie) (Gaby)
    }
    header("location: ../ProfielBewerken.php");
    exit();
}

?>