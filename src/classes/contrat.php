<?php 
  include '../db/config.php';

class contrat {
    private $contraid;
    private $voitureid;
    private $clientid;
    private $datedebut;
    private $datefin;
    private $duree;
    private $prixtotal;
    private $conn;
  
    public function __construct($conn,$contraid,$voitureid,$clientid,$datedebut,$datefin,$duree,$prixtotal){
      $this->contraid = $contraid;
      $this->voitureid = $voitureid;
      $this->clientid = $clientid;
      $this->datedebut = $datedebut;
      $this->datefin = $datefin;
      $this->duree = $duree;
      $this->prixtotal = $prixtotal;
      $this->conn = $conn;
    }
  
    public function addContrat(){
      $sql = "INSERT INTO contrat (client_id, nom, prenom,email, telephone) VALUES (?,?,?,?,?)";
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