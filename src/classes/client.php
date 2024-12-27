<?php 
  include '../db/config.php';
  include '../classes/user.php';


class client extends User{

  
    public function __construct($conn,$idclient,$nomclient,$prenomclient,$telclint,$emailclint){
      $this->idclient = $idclient;
      $this->nomclient = $nomclient;
      $this->prenomclient = $prenomclient;
      $this->telclint = $telclint;
      $this->emailclint = $emailclint;
      $this->conn = $conn;
    }
  
    // Getters
    public function getId() {
      return $this->idclient;
  }

  public function getNom() {
      return $this->nomclient;
  }

  public function getPrenom() {
      return $this->prenomclient;
  }

  public function getTel() {
      return $this->telclint;
  }

  public function getEmail() {
      return $this->emailclint;
  }

  // Setters
  public function setNom($nom) {
      $this->nomclient = $nom;
  }

  public function setPrenom($prenom) {
      $this->prenomclient = $prenom;
  }

  public function setTel($tel) {
      $this->telclint = $tel;
  }

  public function setEmail($email) {
      $this->emailclint = $email;
  }
    
  
  }
?>