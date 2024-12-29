<?php 
  include '../db/config.php';
class User{
    private $nom;
    private $id;
    private $email;
    private $telephone;
    private $password;
    private $role;
    protected  $conn;
     
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
    
    public function login($email,$password){
        $sql = "SELECT * from client where email = '$email' and role ='$this->role'";
        $result = $this->conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_row(); 
            if (password_verify($password, $user[5])) { 
                $_SESSION["user"] = $user[2]; 
                $_SESSION["role"] = $user[4]; 
                 header("Location: ../../index.php");
            } else {
                 echo "<script>alert('Mot de passe incorrect');</script>";
            }
        } else {
           echo "<script>alert('Email non trouvé');</script>";
        }
    }


    

}
?>
