<?php 

$username = "root";
$password = "";

try {
    $conn = new PDO ("mysql:host=localhost;dbname=project5",$username,$password);
}
catch (PDOException $error){
    echo $error->getMessage(); 
}

?>

