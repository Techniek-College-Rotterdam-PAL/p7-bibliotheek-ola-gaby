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
        <li> <a href="FormulierBoeken.php">Lenen</a> </li>
        <i class="fa-solid fa-star"></i><li> <a href="FormulierReserverenBoeken.php">Reserveren</a> </li>
    </ul>
    </div>
    <ul> <li><a href="../ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
</nav> 

<h1> Boeken Reserveren formulier </h1> 

    <form class="formulier" action="Database/" method="post"> 
        
        <label for="gebruikersnaam">Gebruikersnaam</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        


        <input type="submit" name="submit" value="Verstuur">

    </form> 

</body>
</html>