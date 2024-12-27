<?php 
  include '../db/config.php';
class User{
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $password;
    private $role;
    private $conn;
     
    public function __construct($conn, $id, $name, $email, $password, $role) {
        $this->conn = $conn;
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }
    
    // public function login($email,$password){
    //     $sql = "SELECT * from client where email = '$email' and role ='$this->role'";
    //     $result = $this->conn->query($sql);
        
    //     if ($result && $result->num_rows > 0) {
    //         $user = $result->fetch_row(); 
    //         if (password_verify($password, $user[5])) { 
    //             $_SESSION["user"] = $user[2]; 
    //             $_SESSION["role"] = $user[4]; 
    //         } else {
    //             echo "Mot de passe incorrect.";
    //         }
    //     } else {
    //         echo "Utilisateur non trouvé.";
    //     }
    // }

    // public function registre($nom,$prenom,$emial,$telephone,$role,$password){
    //     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //     $sql = "INSERT into client(nom,prenom,email,telephone,role,password) values($nom,$prenom,$email,$telephone,$role,$hashedPassword)";
    //     $this->conn->query($sql);
    // }
    
    // // public function getEmail($email){
    // //     $sql = "SELECT * from client where email = '$email'";
    // //     $result = $this->conn->query($sql);
    // //     return $result;
    // // }

}
?>
