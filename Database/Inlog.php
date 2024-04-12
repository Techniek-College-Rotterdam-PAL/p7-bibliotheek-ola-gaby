<?php

require_once 'Conn.php'; // Include the database connection file

// Assuming you've instantiated the database connection in Conn.php and assigned it to $db_conn

class Gebruiker {
    private $db_conn;
    private $email;
    private $wachtwoord;

    public function __construct($db_conn, $email, $wachtwoord) {
        $this->db_conn = $db_conn;
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
    }

    public function Inloggen() {
        $query = "SELECT * FROM gebruiker WHERE email = :email";
        $stmt = $this->db_conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($this->wachtwoord, $row['wachtwoord'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['wachtwoord'] = $row['wachtwoord'];
                echo $_SESSION['email']; // Echo out the email for demonstration
                return true; // Indicate successful login
            }
        }
        return false; // Indicate login failed
    }
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    var_dump($db_conn);
    $account = new Gebruiker($db_conn, $email, $wachtwoord);
    if ($account->Inloggen()) {
        header("location: ../Ingelogde_student.php");
        // Redirect the user to another page or perform further actions upon successful login
    } else {
        echo "Invalid email or password!";
        // Handle invalid login attempt, show error message, or redirect to login page
    }
}
?>
