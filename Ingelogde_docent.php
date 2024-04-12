<?php
session_start();
require_once "Database/Conn.php";

try {
    // Define query to select values from the users table
    $stmt = "SELECT * FROM docent WHERE docent_id=:docent_id";
    $stmt = "SELECT * FROM docent WHERE gebruikersnaam=:gebruikersnaam";

    // Prepare the statement
    $query = $db_conn->prepare($stmt);

    // Bind the parameters
    $query->bindParam(':docent_id', $_SESSION['docent']);
    $query->bindParam(':gebruikersnaam', $_SESSION['gebruikersnaam']);

    // Execute the query
    $query->execute();

    // Return row as an array indexed by both column name
    $returned_row = $query->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    array_push($errors, $e->getMessage());
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
    <ul> <i class="fa-solid fa-star"></i><li><a href="Ingelogde_docent.php">Hoofdpagina</a></li> </ul> 
    
    <div class="dropdown"> <!-- Dropdown boeken --> 
        <button class="navButton">Boeken</button>
    <ul class="subDropdown">
        <li> <a href="">lijst </a> </li>
        <li> <a href="">Lenen lijst</a> </li>
        <li> <a href="">Reserveren lijst</a> </li>
        <li> <a href="Database/BoekenInvoeren.php">Boek Invoeren</a> </li>
    </ul>
    </div>
</nav> 

<h1>Welkom terug 
   <?php echo "$_SESSION[gebruikersnaam]";
 ?> 
</h1>

</body>
</html>