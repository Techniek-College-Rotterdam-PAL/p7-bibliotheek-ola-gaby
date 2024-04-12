<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project5";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->errorInfo());
    }

    $query = $_GET['q'];
    $sql = "SELECT title FROM boeken WHERE Naam LIKE :query";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':query', '%' . $query . '%', PDO::PARAM_STR);
    $stmt->execute();

    $books = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $books[] = $row;
    }

    echo json_encode($books);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
