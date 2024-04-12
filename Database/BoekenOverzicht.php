<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HoofdCss.css">
    <style>
        .book-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .book {
            width: calc(33.33% - 20px);
            margin-bottom: 20px;
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
    <ul> <li><a href="ProfielBewerken.php">Profiel Bewerken </a></li></ul> 
</nav> 
<div class="book-container">
        <?php
            $db = new Database();
            $boek = new Boek($db);
            $boeken = $boek->getAllboeken();
            $book->displayboeken$boeken($boeken);
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
 
class Boek {
    private $db;
 
    public function __construct($db) {
        $this->db = $db;
    }
 
    // Haal alle boeken op uit de database
    public function getAllBoek() {
        $sql = "SELECT * FROM uitgeleend";
        $stmt = $this->db->conn->query($sql);
        $boeken = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $boeken;
    }
    // Toon boeken
    public function displayboeken$boeken($boeken) {
        foreach ($boeken as $boek) {
            echo "<div class='book'>";
            echo "<h2>" . $boek['gebruikersnaam'] . "</h2>";
            echo "<p>Auteur: " . $boek['email'] . "</p>";
            echo "<p>Taal: " . $boek['boeken'] . "</p>";
            echo "<p>Samenvatting: " . $boek['begindatum'] . "</p>";
            echo "<p>Samenvatting: " . $boek['einddatum'] . "</p>";
            echo "</div>";
        }
    }
}
?>
