<?php

session_start();
require_once "Conn2.php";

// Zorg ervoor dat alle ingevoerde code eruit wordt gehaald(Gaby)
$gebruikersnaam = strip_tags($_POST["gebruikersnaam"]);
$wachtwoord = strip_tags($_POST["wachtwoord"]);
$email = strip_tags($_POST["email"]);
$boeken = strip_tags($_POST["boeken"]);
$begindatum = strip_tags($_POST["begindatum"]);
$einddatum = strip_tags($_POST["einddatum"]);



// Plaats de ingevulde gegevens in de database (Gaby)
$insert_user = $conn->prepare("INSERT INTO reserveren (boeken, begindatum, einddatum) VALUES( :boeken, :begindatum, :einddatum )");

    $insert_user->bindParam(":boeken", $boeken);
    $insert_user->bindParam(":begindatum", $begindatum);
    $insert_user->bindParam(":einddatum", $einddatum);

    $_SESSION["email"] = $email;
   

  
<<<<<<< Updated upstream
  
    if ($insert_user->execute()) {
    
        
         echo '<script type="text/javascript">'; 
         echo 'alert("Het is gelukt om je boek te reserveren!");';
         echo 'window.location.href = "../Formulier/FormulierReserverenBoeken.php;';
         echo '</script>';

        //bij foute inloggegeven komt er een foutmelding op het scherm (Gaby)
         } else {
        
            echo '<script type="text/javascript">'; 
            echo 'alert("Het is niet gelukt om je boek te reserveren!Probeer opnieuw");';
            echo 'window.location.href = "../Formulier/FormulierReserverenBoeken.php;';
            echo '</script>';
         }
        
 
=======
//Gegevens ophalen uit de daatabase om het vervolgens in een overzicht te zetten voor de docent zodat hij kan zien wie welke boek heeft uitgeleend (Ola)
    $query = $conn->prepare("SELECT * FROM gebruiker WHERE gebruikersnaam = :gebruikersnaam");
    $query->bindParam(":gebruikersnaam", $gebruikersnaam);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    //
    if ($insert_user->execute()) {
        // Gegevens succesvol toegevoegd aan de database, stuur de gebruiker terug naar dezelfde pagina
        header("Location:../Formulier/FormulierReserverenBoeken.php");
        exit();
    } else {
        // Fout bij het toevoegen van gegevens aan de database
        echo "Er is een fout opgetreden bij het toevoegen van gegevens aan de database.";
    }
>>>>>>> Stashed changes
?>