<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../HoofdCss.css">
    <title>Docent boeken Invoeren</title>
</head>
<body>
<nav> <!-- Navigatie (Gaby)---> 
    <ul> <li> <a href="../Ingelogde_docent.php">Hoofdpagina</a></li> </ul> 
    
    <div class="dropdown"> <!-- Dropdown boeken --> 
        <button class="navButton">Boeken</button>
    <ul class="subDropdown">
        <li> <a href="../Boekenpagina.php">Bekijken</a> </li>
        <li> <a href="FormulierBoeken.php">Lenen</a> </li>
        <li> <a href="FormulierReserverenBoeken.php">Reserveren</a> </li>
        <li> <i class="fa-solid fa-star"></i><li><a href="Formulier/DocentenBoekenInvoeren.php">Boek Invoeren</a> </li>
    </ul>
    </div>
</nav> 

<h1>
</h1>
<h1> Nieuwe boek Invoeren </h1> 
<p div class="midden">Vul de formulier hieronder in om een nieuwe boek in te voeren </p>
     <div class="midden"> 
     <form class="formulier" action="../Database/BoekenInvoeren.php" method="post" enctype="multipart/form-data"> 
    <label for="Naam">Naam</label>
    <input type="text" id="Naam" name="Naam" required>

    <label for="Auteur">Auteur</label>
    <input type="text" id="Auteur" name="Auteur" required>

    <label for="Samenvatting">Samenvatting</label>
    <input type="text" id="Samenvatting" name="Samenvatting" required>

    <label for="afbeelding">Afbeelding</label>
    <input type="file" id="afbeelding" name="afbeelding">

    <input type="submit" name="submit" value="Verstuur">
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