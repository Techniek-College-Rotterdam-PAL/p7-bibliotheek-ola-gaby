<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../hoofdCss.css">
    <title>Boeken formulier</title>
</head>
<body>

<nav> <!-- Navigatie (Gaby)---> 
    <ul> <li><a href="Ingelogde_student.php">Hoofdpagina</a></li> </ul> 
    
    <div class="dropdown"> <!-- Dropdown boeken --> 
        <button class="navButton">Boeken</button>
    <ul class="subDropdown">
        <li> <a href="../Boekenpagina.php">Bekijken</a> </li>
         <i class="fa-solid fa-star"></i> <li> <a href="FormulierBoeken.php">Lenen</a> </li>
        <li> <a href="FormulierReserverenBoeken.php">Reserveren</a> </li>
    </ul>
    </div>
    <ul> <li><a href="../ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
</nav> 


<h1> Boeken lenen formulier </h1> 
<p div class="midden">Vul de formulier hieronder in om een boek te lenen </p>
     <div class="midden"> 
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
             <label for="begindatum">Begindatum:</label>
             <input type="date" id="begindatum" name="begindatum">
             <label for="datum">Einddatum:</label>
             <input type="date" id="einddatum" name="datum">


        <input type="submit" name="submit" value="Verstuur">
</div> 
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