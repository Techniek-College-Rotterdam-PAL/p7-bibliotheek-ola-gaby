<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../hoofdCss.css">
    <title>Inloggen voor Docent</title>
   
</head>
<body>
<nav> <!-- Navigatie 1 (trello) Gaby--> 
    <ul> <li><a href="../Hoofdpagina.php">Hoofdpagina</a></li> </ul> 
    <div class="dropdown"> <!-- Dropdown registratie --> 
        <button class="navButton">Registreer</button>
    <ul class="subDropdown">
        <li> <a href="RegistratieStudent.php">Student Registratie</a> </li>
        <li> <a href="RegistratieDocent.php">Docent Registratie</a> </li>
    </ul>
    </div>

    <div class="dropdown"> <!-- Dropdown Login --> 
        <button class="navButton">Log In</button>
    <ul class="subDropdown">
        <li> <a href="LoginStudent.php">Student Login</a> </li>
        <i class="fa-solid fa-star"></i><li> <a href="LoginDocent.php">Docent Login</a> </li>
    </ul>
    </div>
</nav>

   <h1> Log in formulier voor docenten</h1> 
   <p div class="midden">Vul de formulier hieronder in om in te loggen als docent </p>
    <div class="midden">

    <form class="formulier" action="../Database/InlogDocent.php" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>

        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>

        <input type="submit" name="submit" value="Inloggen">
    </form>
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
