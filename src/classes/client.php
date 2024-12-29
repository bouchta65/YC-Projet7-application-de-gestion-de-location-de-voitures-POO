<?php 
  include '../db/config.php';
  include '../classes/user.php';


class Client extends User{

  
  public function __construct($conn,$nom, $id, $email, $telephone, $password, $role) {
    parent::__construct($conn, $nom, $id, $email, $telephone, $password, $role);
  }
  function getclient($email){
    $sql = "SELECT * from client where email = '$email'";
    return $this->conn->query($sql);
  }
    public function getId() {
      return $this->idclient;
  }

  public function getNom() {
      return $this->nomclient;
  }

  public function getCIN() {
      return $this->prenomclient;
  }

  public function getTel() {
      return $this->telclint;
  }

  public function getEmail() {
      return $this->emailclint;
  }

  public function setNom($nom) {
      $this->nomclient = $nom;
  }

  public function setCIN($prenom) {
      $this->prenomclient = $prenom;
  }

  public function setTel($tel) {
      $this->telclint = $tel;
  }

  public function setEmail($email) {
      $this->emailclint = $email;
  }

    public function reserveVoiture($idvoiture, $idclient, $date_debut, $date_fin, $duree, $prixtotal) {
    
          $sql = "INSERT INTO contrat (voiture_id, client_id, date_debut, date_fin, Duree, prixtotal, status) 
                        VALUES (?, ?, ?, ?, ?, ?, 'en attente')";
          $stmt = $this->conn->prepare($sql);
          $stmt->bind_param("ssssid", $idvoiture, $idclient, $date_debut, $date_fin, $duree, $prixtotal);
  
          if ($stmt->execute()) {
              echo "<script>alert('Réservation réussie. Contrat ajouté.');</script>";
          } else {
              echo "<script>alert('Erreur lors de l\'ajout du contrat.');</script>";
          }

      $stmt->close();
  
  }


}

  
?>