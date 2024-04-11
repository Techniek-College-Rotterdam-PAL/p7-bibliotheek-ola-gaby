<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HoofdCss.css">
    <title>Boeken formulier</title>
</head>
<body>

<nav> <!-- Navigatie (Gaby)---> 
    <ul> <li><a href="Ingelogde_gebruiker.php">Hoofdpagina</a></li> </ul> 
    <ul> <li><a href="Boekenpagina.php">Boeken</a></li> </ul> 
    <ul> <i class="fa-solid fa-star"></i><li><a href="FormulierReserverenBoeken.php">Boeken Reserveren </a></li></ul> 
    <ul> <li><a href="ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
    
</nav> 

<h1> Boeken lenen formulier </h1> 

    <form class="formulier" action="Database/" method="post"> 
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

        <input type="submit" name="submit" value="Verstuur">

    </form> 

</body>
</html>