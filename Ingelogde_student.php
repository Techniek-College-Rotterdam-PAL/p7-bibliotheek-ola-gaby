<?php
session_start();
require_once "Database/Conn.php";

// Check if user is not logged in
if (!$gebruiker->is_logged_in()) {
    $gebruiker->redirect('index.php');
}

try {
    // Define query to select values from the users table
    $sql = "SELECT * FROM gebruiker WHERE gebruiker_id=:gebruiker_id";

    // Prepare the statement
    $query = $db_conn->prepare($sql);

    // Bind the parameters
    $query->bindParam(':gebruiker_id', $_SESSION['gebruiker_session']);

    // Execute the query
    $query->execute();

    // Return row as an array indexed by both column name
    $returned_row = $query->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    array_push($errors, $e->getMessage());
}

if (isset($_GET['logout']) && ($_GET['logout'] == 'true')) {
    $gebruiker->log_out();
    $gebruiker->redirect('index.php');
}

?>

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
    <ul> <i class="fa-solid fa-star"></i><li><a href="Ingelogde_student.php">Hoofdpagina</a></li> </ul> 
    
    <div class="dropdown"> <!-- Dropdown boeken --> 
        <button class="navButton">Boeken</button>
    <ul class="subDropdown">
        <li> <a href="Boekenpagina.php">Bekijken</a> </li>
        <li> <a href="Formulier/FormulierBoeken.php">Lenen</a> </li>
        <li> <a href="Formulier/FormulierReserverenBoeken.php">Reserveren</a> </li>
    </ul>
    </div>
    <ul> <li><a href="ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
</nav> 

<h1>Welkom terug 
   <?php echo "$_SESSION[gebruikersnaam]";
 ?> 
</h1>

<article>
         <div class="Flex"> <!-- Om img en p naast elkaar te zetten (Gaby)-->
             <img src="Afbeeldingen/Img_OpenBoek.png" alt="Afbeelding van een openboek ">
              <p> 
                 Boeken bieb is opgericht om studenten die het wat minder hebben te helpen met het verminderen van boeken kosten. Op deze website kan je verschillde boeken vinden die je als student zou kunnen gebruiken of willen lezen. 
                 <br> <br> <!-- Zorgt voor een break in de text (Gaby)--> 
                 Als je student bij het techniek college rotterdam bent, kan je makkelijk boeken van onze site lenen zonder einige kosten. Kijk nu in onze boekenlijst en leen je eerste boek!
              </p>
         </div>

         <p class="midden">
           Fijn dat je hebt ingelogd op BoekenBieb
            <br>
             Wil je een boek uitzoeken om te lenen? Ga dan naar onze boeken pagina!
         </p>

    </article>

               <!-- Boeken cards code begind hier (Gaby) -->
<div class="BoekenCards">  
<main> <!-- Boek nummer 1 Harry Potter (Gaby) -->
    <div class="centered"> <!-- Zrogt ervoor dat de card in de midden is geplaats -->
            <article class="cards">
                <a href="Boekenpagina.php">
                    <figure>
                        <img src="Afbeeldingen/Harry-Potter-en-de-gevangene-van-Azkaban.png" alt="Hard cover van het boek Harry Potter en de gevangene van Azkaban"/>
                    </figure>
                    <div class="card-content">
                        <h2> Harry Potter en de gevangene van Azkaban</h2>
                        <p>
                        Voor Harry Potter aan zijn derde jaar op Zweinsteins Hogeschool voor Hekserij en Hocus Pocus begint, moet hij de zomervakantie bij zijn gemene oom en tante doorbrengen. Door een magisch ongelukje komt hij ineens 's avonds laat op straat te staan. Dan blijkt dat Sirius Zwarts, een beruchte volgeling van Jeweetwel, uit de gevangenis.....
                        <strong> Klik om verder te lezen </strong>
                        </p>
                    </div><!-- .card-content -->
                </a>
            </article><!-- .card -->
    </div>
</main>

<main> <!-- Boek nummer 2  Atlas (Gaby) -->
    <div class="centered"> <!-- Zrogt ervoor dat de card in de midden is geplaats -->
            <article class="cards">
                <a href="Boekenpagina.php">
                    <figure>
                        <img src="Afbeeldingen/Atlas-the-Story-of-Pa-Salt.png" alt="cover van het boek Atlas the Story of Pa Salt"/>
                    </figure>
                    <div class="card-content">
                        <h2> Atlas: the Story of Pa Salt</h2>
                        <p>
                        Spanning a lifetime of love and loss, crossing borders and oceans, Atlas: The Story of Pa Salt, co-authored by her son Harry Whittaker, draws Lucinda Riley's Seven Sisters series to its stunning, unforgettable conclusion. 1928, Paris A boy is found, moments from death, and taken in by a kind family. Gentle, precocious, talented, he flourishes in his new home, and the .......
                        <strong> Klik om verder te lezen </strong>
                        </p>
                    </div><!-- .card-content -->
                </a>
            </article><!-- .card -->
    </div>
</main>

<main> <!-- Boek nummer 3  Atlas (Gaby) -->
    <div class="centered"> <!-- Zrogt ervoor dat de card in de midden is geplaats -->
            <article class="cards">
                <a href="Boekenpagina.php">
                    <figure>
                        <img src="Afbeeldingen/Eén-raam-geen-sleutel.png" alt="Cover van Eén raam geen sleutel"/>
                    </figure>
                    <div class="card-content">
                        <h2>Eén raam, geen sleutel</h2>
                        <p>
                        Het is tweede kerstdag en Carl Mørck zit met handboeien om in een politieauto op weg naar de gevangenis Vestre Fængsel. Vijftien jaar na dato heeft de gewelddadige zaak met het spijkerpistool hem ingehaald, en nu dreigen beschuldigingen van drugssmokkel en moord zijn leven en loopbaan in puin te leggen.Zijn collega's bij de politie in Kopenhagen hebben hem de rug..... 

                        <strong> Klik om verder te lezen </strong>
                        </p>
                    </div><!-- .card-content -->
                </a>
            </article><!-- .card -->
    </div>
</main>
</div>
              <!-- Boeken cards code eindigd hier (Gaby) -->
<footer> <!-- footer (Gaby) --> 
    <p>   
        Heb je een vraag? Mail dan naar BoekenBieb@outlook.com.
        <br>
         Wij zijn op de mail bereikbaar op maandag t/m vrijdag van 11:00 tot 16:00 uur. 
    </p>
</footer>










</body>
</html>