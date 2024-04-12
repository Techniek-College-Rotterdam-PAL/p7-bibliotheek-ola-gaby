<?php
require_once 'Conn.php'; // Include the database connection file

class Registratie {
    private $db_conn;
    private $voornaam;
    private $achternaam;
    private $email;
    private $gebruikersnaam;
    private $wachtwoord;

    public function __construct($db_conn, $voornaam, $achternaam, $email, $gebruikersnaam, $wachtwoord)
    {
        $this->db_conn = $db_conn;
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->email = $email;
        $this->gebruikersnaam = $gebruikersnaam;
        $this->wachtwoord = $wachtwoord;
    }

    public function register()
    {
        try {
            $user_hashed_password = password_hash($this->wachtwoord, PASSWORD_DEFAULT);
            $stmt = "INSERT INTO gebruiker(voornaam, achternaam, email, gebruikersnaam, wachtwoord) VALUES(:voornaam,:achternaam,:email,:gebruikersnaam, :wachtwoord)";
            $query = $this->db_conn->prepare($stmt);
            $query->bindParam(":voornaam", $this->voornaam);
            $query->bindParam(":achternaam", $this->achternaam);
            $query->bindParam(":email", $this->email);
            $query->bindParam(":gebruikersnaam", $this->gebruikersnaam);
            $query->bindParam(":wachtwoord", $user_hashed_password);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            // Handle the error, log it, or show an appropriate message
            return false;
        }
    }
}

if (isset($_POST['submit'])) {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $gebruikersnaam = $_POST['gebruikersnaam']; // Assuming this field exists in your form
    $wachtwoord = $_POST['wachtwoord'];

    $account = new Registratie($db_conn, $voornaam, $achternaam, $email, $gebruikersnaam, $wachtwoord);
    if ($account->register()) { 
        header("location: ../Ingelogde_student.php");
        // Redirect the user to another page or perform further actions upon successful registration
    } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("Het is niet gelukt om te registreren! Probeer opnieuw");';
        echo 'window.location.href = "../Login-Registreer/RegistratieStudent.php";';
        echo '</script>';
    
    }
}
?>
