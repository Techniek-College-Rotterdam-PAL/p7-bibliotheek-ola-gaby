<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HoofdCss.css">
    <style>
    .boek-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .cards {
            width: calc(33.33% - 20px);
            margin-bottom: 20px;
        }
    .cards img {
    width: 100%;
    height: auto;
    max-height: 500px;
    object-fit: cover;
}
</style>
</head>
<body>
 
<nav> <!-- Navigatie (Gaby)---> 
    <ul> <li><a href="Ingelogde_student.php">Hoofdpagina</a></li> </ul> 
    
    <div class="dropdown"> <!-- Dropdown boeken --> 
        <button class="navButton">Boeken</button>
    <ul class="subDropdown">
         <i class="fa-solid fa-star"></i><li> <a href="Boekenpagina.php">Bekijken</a> </li>
        <li> <a href="Formulier/FormulierBoeken.php">Lenen</a> </li>
        <li> <a href="Formulier/FormulierReserverenBoeken.php">Reserveren</a> </li>
    </ul>
    </div>
<<<<<<< Updated upstream
=======
    <ul> <li><a href="ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
    <input type="text" id="search" placeholder="Search...">
    <div id="search-results"></div>
>>>>>>> Stashed changes
</nav> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#search').on('keyup', function(){
        var query = $(this).val();
        $.ajax({
            url: 'zoekbalk.php',
            method: 'POST',
            data: {query: query},
            success: function(data){
                $('#search-results').html(data);
            }
        });
    });
});
</script>
<div class="boek-container">
        <?php
            $db = new Database();
            $book = new Book($db);
            $books = $book->getAllBooks();
            $book->displayBooks($books);
        ?>
    </div>
 
</body>
</html>
 
<?php
 
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "project5";
    public $conn;
 
    // Maak de verbinding
    public function __construct() {
        try {
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            // Stel PDO in om fouten te rapporteren
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
 
    // Sluit de verbinding
    public function __destruct() {
        $this->conn = null;
    }
}
 
class Book {
    private $db;
 
    public function __construct($db) {
        $this->db = $db;
    }
 
    // Haal alle boeken op uit de database
    public function getAllBooks() {
    $sql = "SELECT * FROM boeken";
    $stmt = $this->db->conn->query($sql);
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $books;
}
    // Toon boeken
    public function displayBooks($books) {
        foreach ($books as $book) {
            echo "<div class='cards'>";
            echo "<figure>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($book['afbeelding']) .'" />';
            echo "</figure>"; 
            echo "<h2>" . $book['Naam'] . "</h2>";
            echo "<p>Auteur: " . $book['Auteur'] . "</p>";
            echo "<p>Taal: " . $book['Taal'] . "</p>";
            echo "<p>Samenvatting: " . $book['Samenvatting'] . "</p>";
            echo "</div>";
        }
    }
}
?>
