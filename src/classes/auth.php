<?php
include '../db/config.php';

class Auth {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        session_start(); 
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM client WHERE email = '$email'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc(); 
        
            if (password_verify($password, $user['password'])) {
                $_SESSION["user"] = $user['email'];
                $_SESSION["role"] = $user['role'];
                if($_SESSION["role"]=="User"){
                    header("Location: ../views/clientvoiture.php");

                }else{
                    header("Location: ../../index.php");
                }
                
            } else {
                echo "<script>alert('Mot de passe incorrect');</script>";
            }
        } else {
            echo "<script>alert('Email non trouvé');</script>";
        }
    }

    public function register($client_id,$nom, $email, $telephone, $password) {
        $sql = "SELECT email FROM client WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result && $result->num_rows > 0) {
            echo "<script>alert('Lemail est déjà utilisé.');</script>";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO client (client_id,nom, email, telephone, role, password) VALUES (?, ?, ?, ?, 'user', ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssss", $client_id,$nom, $email, $telephone, $hashedPassword);
    
            if ($stmt->execute()) {
                echo "<script>alert('Inscription réussie.');</script>";
            } else {
                echo "<script>alert('Erreur lors de linscription.');</script>";
            }
        }
    }
    

    public function isLoggedIn() {
        return isset($_SESSION["user"]);
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../../login.php");
        exit();
    }
}
?>
