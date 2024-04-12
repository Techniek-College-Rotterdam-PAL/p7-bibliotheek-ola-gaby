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
        
 
?>