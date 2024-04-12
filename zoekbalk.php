<?php
// Include your database connection file
require_once 'Database/Conn.php';

// Get the search query from POST data
if(isset($_POST['query'])) {
    $search = $_POST['query'];
    
    // Perform a database query to retrieve search results
    $sql = "SELECT * FROM boeken WHERE Naam LIKE :search OR Auteur LIKE :search";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display search results
    if($stmt->rowCount() > 0) {
        foreach($results as $row) {
            echo "<div class='book'>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['afbeelding']) .'" />';
            echo "<h2>" . $row['Naam'] . "</h2>";
            echo "<p>Auteur: " . $row['Auteur'] . "</p>";
            echo "<p>Taal: " . $row['Taal'] . "</p>";
            echo "<p>Samenvatting: " . $row['Samenvatting'] . "</p>";
            echo "<p>Voorraad: " . $row['Voorraad'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
}
?>