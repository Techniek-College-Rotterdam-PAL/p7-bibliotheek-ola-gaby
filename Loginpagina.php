<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HoofdCss.css">
    <title>Inloggen</title>
   
</head>
<body>
<nav>
    <ul> <li><a href="Hoofdpagina.php">Hoofdpagina</a></li> </ul> 
    <ul> <li><a href="Boekenpagina.php">Boeken</a></li> </ul> 
    <ul> <i class="fa-solid fa-star"></i> <li><a href="Loginpagina.php">Login</a></li> </ul> 
    <ul> <li><a href="Registratiepagina.php">Registreer</a></li> </ul>  
</nav> 

   <h1> Log in formulier </h1> 
    <form class="formulier" action="Database/Inlog.php" method="post">
        <label for="gebruikersnaam">Gebruikersnaam</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>

        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>

        <input type="submit" name="submit" value="Inloggen">
    </form>

    <footer> <!-- footer (Gaby) --> 
    <p>   
        Heb je een vraag? Mail dan naar BoekenBieb@outlook.com.
        <br>
         Wij zijn op de mail bereikbaar op maandag t/m vrijdag van 11:00 tot 16:00 uur. 
    </p>
</footer>
</body>
</html>
