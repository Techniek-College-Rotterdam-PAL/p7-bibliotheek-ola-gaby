<?php

session_start();
require_once "Conn2.php";

// Zorg ervoor dat alle ingevoerde code eruit wordt gehaald(Ola)
$gebruikersnaam = strip_tags($_POST["gebruikersnaam"]);
$wachtwoord = strip_tags($_POST["wachtwoord"]);
$email = strip_tags($_POST["email"]);
$boeken = strip_tags($_POST["boeken"]);
$begindatum = strip_tags($_POST["begindatum"]);
$einddatum = strip_tags($_POST["einddatum"]);



// Plaats de ingevulde gegevens in de database (Ola)
$insert_user = $conn->prepare("INSERT INTO uitgeleend (boeken, begindatum, einddatum) VALUES( :boeken, :begindatum, :einddatum )");

    $insert_user->bindParam(":boeken", $boeken);
    $insert_user->bindParam(":begindatum", $begindatum);
    $insert_user->bindParam(":einddatum", $einddatum);

    if ($insert_user->execute()) {
        // Gegevens succesvol toegevoegd aan de database, stuur de gebruiker terug naar dezelfde pagina
        echo '<div class="success-message">Het formulier is succesvol verzonden!</div>';
        header("Location:../Formulier/FormulierBoeken.php");
        exit();
    } else {
        // Fout bij het toevoegen van gegevens aan de database
        echo "Er is een fout opgetreden bij het toevoegen van gegevens aan de database.";
    }
?>