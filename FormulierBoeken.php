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

<nav>
    <ul> <li><a href="Hoofdpagina.php">Hoofdpagina</a></li> </ul> 
    <ul> <li><a href="Boekenpagina.php">Boeken</a></li> </ul> 
    <ul> <li><a href="Loginpagina.php">Login</a></li> </ul> 
    <ul> <li><a href="Registratiepagina.php">Registreer</a></li> </ul>  
</nav> 

<h1> Boeken lenen formulier </h1> 

    <form class="formulier" action="Database/" method="post"> 
        <label for="gebruikersnaam">Gebruikersnaam</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>

        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="boeken">Kies uw boek:</label>
             <select id="boeken" name="boeken">
                  <option value="Harry Potter en de gevangene van Azkaban">Harry Potter en de gevangene van Azkaban</option>
                  <option value="Harry Potter en de vuurbeker">Harry Potter en de vuurbeker</option>
                  <option value="Atlas: the Story of Pa Salt">Atlas: the Story of Pa Salt</option>
                  <option value="Eén raam, geen sleutel">Eén raam, geen sleutel</option>
                  <option value="De spionne">De spionne</option>
                  <option value="De Joodsche Raad">De Joodsche Raad</option>
                <option value=""></option>
             </select>
             <label for="datum">Uitleen datum:</label>
             <input type="date" id="datum" name="datum">
             <label for="datum">Einddatum:</label>
             <input type="date" id="einddatum" name="datum">


        <input type="submit" name="submit" value="Verstuur">

    </form> 

</body>
</html>