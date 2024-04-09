<?php
session_start();
require_once "Database/Conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HoofdCss.css">
    <title>Profiel Bewerken</title>
</head>
<body>
<nav> <!-- Navigatie (Gaby)---> 
    <ul> <li><a href="Ingelogde_gebruiker.php">Hoofdpagina</a></li> </ul> 
    <ul> <li><a href="Boekenpagina.php">Boeken</a></li> </ul> 
    <ul> <i class="fa-solid fa-star"></i><li><a href="ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
</nav> 

<h1>Welkom terug 
   <?php echo "$_SESSION[gebruikersnaam]";
 ?> 
</h1>
<div class="profiel"> 
<?php

      $gebruiker = $_SESSION['gebruikersnaam'];
      $query = $conn->prepare("SELECT * FROM gebruiker WHERE Gebruikersnaam = :gebruikersnaam");
      $query->bindParam(':gebruikersnaam', $gebruiker);
      $query->execute();

      $resultaat = $query->fetchAll();
      foreach ($resultaat as $gebruiker) {
        // Stuurt de gegevens naar ProfielBewerkenData + profiel bewerken formulier (Gaby)
        echo '<div class="post">
        <form class="formulier" action="Database/ProfielBewerkenData.php" method="post"> 

        <label for="gebruikersnaam">Gebruikersnaam</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam">
 
        <label for="nieuwe_gebruikersnaam">Nieuwe gebruikersnaam</label>
        <input type="text" id="nieuwe_gebruikersnaam" name="nieuwe_gebruikersnaam">

        <label for="wachtwoord" name="wachtwoord">Wachtwoord</label>
        <input type="password" id="wachtwoord" name="wachtwoord">

        <input type="submit" value="Profiel bewerken" name="profielbewerken">
         </form>
         </div> ';
      }
 ?>
</div>
        <footer> <!-- footer (Gaby) --> 
            <p>   
        Heb je een vraag? Mail dan naar BoekenBieb@outlook.com.
        <br>
         Wij zijn op de mail bereikbaar op maandag t/m vrijdag van 11:00 tot 16:00 uur. 
            </p>
        </footer>


</body>
</html>