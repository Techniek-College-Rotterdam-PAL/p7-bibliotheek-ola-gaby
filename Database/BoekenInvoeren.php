<?php 

session_start();
require_once "Conn2.php"; // database connectie (Ola)

// Zorg ervoor dat alle ingevoerde code eruit wordt gehaald(Ola)
$naam = strip_tags($_POST["Naam"]);
$auteur = strip_tags($_POST["Auteur"]);
$samenvatting = strip_tags($_POST["Samenvatting"]);

// Plaats de ingevulde gegevens in de database (Ola)
$insert_user = $conn->prepare("INSERT INTO boeken (Naam, Auteur, Samenvatting) VALUES(:Naam, :Auteur, :Samenvatting)");

$insert_user->bindParam(":Naam", $naam);
$insert_user->bindParam(":Auteur", $auteur);
$insert_user->bindParam(":Samenvatting", $samenvatting);

if ($insert_user->execute()) {
    // Gegevens succesvol toegevoegd aan de database, stuur de gebruiker terug naar dezelfde pagina
    header("Location:../Formulier/DocentBoekenInvoeren.php");
    exit();
} else {
    // Fout bij het toevoegen van gegevens aan de database
    echo "Er is een fout opgetreden bij het toevoegen van gegevens aan de database.";
}
?>