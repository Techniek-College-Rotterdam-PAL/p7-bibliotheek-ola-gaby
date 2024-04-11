<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="HoofdCss.css">
</head>
<body>
<nav>
    <ul> <li><a href="Hoofdpagina.php">Hoofdpagina</a></li> </ul> 
    <ul> <li><a href="Boekenpagina.php">Boeken</a></li> </ul> 
    <ul><li><a href="Loginpagina.php">Login</a></li> </ul> 
    <ul>  <i class="fa-solid fa-star"></i> <li><a href="Registratiepagina.php">Registreer</a></li> </ul>  
</nav> 

    <h1> Registratie formulier </h1> 

    <form class="formulier" action="Database/Registratie.php" method="post"> 
        <label for="voornaam">Voornaam</label>
        <input type="text" id="voornaam" name="voornaam" required>

        <label for="achternaam">Achternaam</label>
        <input type="text" id="achternaam" name="achternaam" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="telefoonnummer">Telefoonnummer</label>
        <input type="tel" id="telefoonnummer" name="telefoonnummer" required>

        <label for="gebruikersnaam">Gebruikersnaam</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>

        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>

        <input type="submit" name="submit" value="Registreren">

    </form> 

    <!-- code om alleen met een studenten email of een docenten email te kunnen registreren (Ola) --> 
    <script>
        function validateForm() {
            var emailInput = document.getElementById("email").value;
            var emailVolgorde = /^[a-zA-Z0-9._%+-]+@(?:student\.zadkine\.nl|tcrmbo\.nl)$/; // Adjust this pattern as needed

    // Kijken of de email het zelfde is als de volgorde  die aangehouden moet worden
    if (!emailVolgorde.test(emailInput)) {
        alert("Registratie alleen mogelijk met een geldige studenten- of docentenemail.");
        return false; //Geen toegang tot de website 
    }

    return true; // toegang tot de website met de juiste gegevens
    }
    </script>

    <footer> <!-- footer (Gaby) --> 
    <p>   
        Heb je een vraag? Mail dan naar BoekenBieb@outlook.com.
        <br>
         Wij zijn op de mail bereikbaar op maandag t/m vrijdag van 11:00 tot 16:00 uur. 
    </p>
</footer>
</body>
</html>