<?php 

session_start();
require_once "Database/Conn.php"; // database connectie (Gaby)

// Zorg ervoor dat alle ingevoerde code eruit wordt gehaald(Gaby)
$voornaam = strip_tags($_POST["voornaam"]);
$achternaam = strip_tags($_POST["achternaam"]);
$email = strip_tags($_POST["email"]);
$telefoonnummer = strip_tags($_POST["telefoonnummer"]);
$gebruikersnaam = strip_tags($_POST["gebruikersnaam"]);
$wachtwoord = strip_tags($_POST["wachtwoord"]);



// Plaats de ingevulde gegevens in de database (Gaby)
$insert_user = $conn->prepare("INSERT INTO gebruiker (voornaam,achternaam,email,telefoonnummer,gebruikersnaam, wachtwoord) VALUES( :voornaam, :achternaam, :email, :telefoonnummer, :gebruikersnaam, :wachtwoord)");

    $insert_user->bindParam(":voornaam", $voornaam);
    $insert_user->bindParam(":achternaam", $achternaam);
    $insert_user->bindParam(":email", $email);
    $insert_user->bindParam(":telefoonnummer", $telefoonnummer);
    $insert_user->bindParam(":gebruikersnaam", $gebruikersnaam);
    $insert_user->bindParam(":wachtwoord", $hashed_wachtwoord);
  
    $password_difficulty = ['difficulty' => 11];
    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT, $password_difficulty);

    $_SESSION["gebruikersnaam"] = $gebruikersnaam;
    $_SESSION["id"] = $id;
    //--------------------------------------------------------------------------------------


 $insert_user->execute(header("location: logged_in_user.php"));
  


?>