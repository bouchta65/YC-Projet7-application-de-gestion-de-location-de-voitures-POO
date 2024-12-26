<?php 
  include '../db/config.php';

class client {
    private $idclient;
    private $nomclient;
    private $prenomclient;
    private $telclint;
    private $emailclint;
    private $conn;
  
    public function __construct($conn,$idclient,$nomclient,$prenomclient,$telclint,$emailclint){
      $this->idclient = $idclient;
      $this->nomclient = $nomclient;
      $this->prenomclient = $prenomclient;
      $this->telclint = $telclint;
      $this->emailclint = $emailclint;
      $this->conn = $conn;
    }
  
    public function addClient(){
      $sql = "INSERT INTO client (client_id, nom, prenom,email, telephone) VALUES (?,?,?,?,?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("sssss",$this->idclient,$this->nomclient,$this->prenomclient,$this->emailclint,$this->telclint);
      $stmt->execute();
      $stmt->close();
    }
  
    public function deleteClient($id){
      $sql = "DELETE from client where client_id = ?";
      $stmt= $this->conn->prepare($sql);
      $stmt->bind_param("s",$id);
      $stmt->execute();
      $stmt->close();
    }
    public function selectOneClient($id){
      $sql = "SELECT * from client where client_id='$id'";
      $result = $this->conn->query($sql);
      return $result;

    }
  
    public function getClients(){
      $sql = "SELECT * from client";
      $result = $this->conn->query($sql);
      return $result;
    }
  
    public function editClient($idcl,$nomcl,$prenomcl,$telcl,$emailcl){
      $sql = "UPDATE client SET nom = ?, prenom = ?, telephone = ?, email = ? where client_id = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param('sssss',$nomcl,$prenomcl,$telcl,$emailcl,$idcl);
      $stmt->execute();
      $stmt->close();
    }
  
  }
?>