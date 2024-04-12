<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HoofdCss.css">
    <title>Hoofdpagina</title>
</head>
<body>
<nav> <!-- Navigatie (Gaby)---> 
    <ul> <i class="fa-solid fa-star"></i><li><a href="Ingelogde_docent.php">Hoofdpagina</a></li> </ul> 
    
    <div class="dropdown"> <!-- Dropdown boeken --> 
        <button class="navButton">Boeken</button>
    <ul class="subDropdown">
        <li> <a href="Boekenpagina.php">Bekijken</a> </li>
        <li> <a href="Formulier/FormulierBoeken.php">Lenen</a> </li>
        <li> <a href="Formulier/FormulierReserverenBoeken.php">Reserveren</a> </li>
        <li> <a href="Formulier/DocentenBoekenInvoeren.php">Boek Invoeren</a> </li>
    </ul>
    </div>
</nav> 

<h1>
   <?php echo "$_SESSION[gebruikersnaam]";
 ?> 
</h1>
<h1> Boek Invoeren </h1> 
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

</body>
</html>