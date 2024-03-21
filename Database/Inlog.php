<?php 
    session_start();
    require_once "conn.php"; // database connectie (Ola)
    
    $gebruikersnaam = strip_tags($_POST["gebruikersnaam"]);
    $wachtwoord = strip_tags($_POST["wachtwoord"]);

    $_SESSION["gebruikersnaam"] = $gebruikersnaam;
    echo "$gebruikersnaam en $wachtwoord"; 

    //gebruikersnaam ophalen uit de database zodat het later op de pagina kan worden weergegeven (Ola)
    $query = $conn->prepare("SELECT * FROM gebruiker WHERE gebruikersnaam = :gebruikersnaam");
    $query->bindParam(":gebruikersnaam", $gebruikersnaam);
    $query->execute();

    //
    if ($query->rowCount() == 1) {
    
         $result = $query->fetch(PDO::FETCH_ASSOC);

    
        //code om de gebruikersnaam in de header van de pagina te laten zien (Ola)
        if (password_verify($wachtwoord, $result['wachtwoord'])) {
         $_SESSION["gebruikersnaam"] = $gebruikersnaam;
        
         header("location: logged_in_user.php");

        //bij foute inloggegeven komt er een foutmelding op het scherm (Ola)
         } else {
          header("location: fout_inlog_formulier.php");
         }
} 
?>