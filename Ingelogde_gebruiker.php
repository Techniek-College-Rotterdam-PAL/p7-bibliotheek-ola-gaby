<?php
session_start();
require_once "Database/Conn.php";

$sql = "SELECT * FROM gebruiker WHERE gebruikersnaam = :un";
  $stmt = $conn->prepare($sql);
  $stmt->execute(["un" => $_SESSION["gebruikersnaam"]]);
  $account_data = $stmt->fetch(PDO::FETCH_OBJ);

$gebruikersnaam = $account_data->gebruikersnaam;
$account_email = $account_data->email;
$account_id = $account_data->id;

$_SESSION["gebruikersnaam"] = $gebruikersnaam;
$_SESSION["account_id"] = $account_id;
$_SESSION["email"] = $account_email;
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
    <ul> <i class="fa-solid fa-star"></i><li><a href="Ingelogde_gebruiker.php">Hoofdpagina</a></li> </ul> 
    <ul> <li><a href="Boekenpagina.php">Boeken</a></li> </ul> 
    <ul> <li><a href="ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
</nav> 

<h1>Welkom terug 
   <?php echo "$_SESSION[gebruikersnaam]";
 ?> 
</h1>









</body>
</html>