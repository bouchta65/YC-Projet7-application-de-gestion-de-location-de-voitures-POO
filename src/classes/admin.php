<?php
include '../classes/contrat.php';
include '../classes/client.php';
include '../classes/voiture.php';

class Admin {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addClient(Client $client){
        $sql = "INSERT INTO client (client_id, nom, prenom,email, telephone) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss",$client->getNom,$client->getNom,$client->getPrenom,$client->getEmail,$client->getTel);
        $stmt->execute();
        $stmt->close();
      }
    
      public function deleteClient($id){
        $sql = "DELETE from client where client_id = '$id'";
        $result = $this->conn->query($sql);
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



      public function addContrat(Contrat $contrat) {
        $voitureId = $contrat->getVoitureId();
        $clientId = $contrat->getClientId();
        $dateDebut = $contrat->getDateDebut();
        $dateFin = $contrat->getDateFin();
        $duree = $contrat->getDuree();
        $prixTotal = $contrat->getPrixTotal();
    
        $sql = "INSERT INTO contrat (voiture_id, client_id, date_debut, date_fin, Duree, prixtotal) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssid", $voitureId, $clientId, $dateDebut, $dateFin, $duree, $prixTotal);
        $stmt->execute();
        $stmt->close();
    }
    
      public function deleteContrat($id){
        $sql = "DELETE from contrat where contrat_id = ?";
        $stmt= $this->conn->prepare($sql);
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $stmt->close();
      }

      public function editContrat($idcontrat,$datedebut,$datefin,$duree,$prixtotal){
        $sql = "UPDATE contrat SET date_debut = ?, date_fin = ?, Duree = ?, prixtotal= ? where contrat_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssidi',$datedebut,$datefin,$duree,$prixtotal,$idcontrat);
        $stmt->execute();
        $stmt->close();
      }


      public function addVoiture(Voiture $voiture){
        $matricule = $voiture->getMatricule();
        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $annee = $voiture->getAnnee();
        $fuelType = $voiture->getFuelType();
        $status = $voiture->getStatus();
        $prixVoiture = $voiture->getPrixVoiture();
        $imageName = $voiture->getImageName();
        $targetDir = $voiture->getTargetDir();
        $imageVoiture = $voiture->getImageVoiture();
        $conn = $voiture->getConn();
        
        $sql = "INSERT INTO voiture (matricule, marque, modele, Annee, type_carburant, image_voiture, etat, prix_location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssisssd", $matricule, $marque, $modele, $annee, $fuelType, $imageVoiture, $status, $prixVoiture);
        $stmt->execute();
        $stmt->close();

  }

  public function deleteVoiture($matricule){
    $sql = "DELETE from voiture where matricule='$matricule'";
    return $this->conn->query($sql);
  }



  public function editVoiture($matricule, $marque, $modele, $Annee, $fuelType, $status, $prixVoiture){
    $sql="UPDATE voiture SET marque = '$marque', modele = '$modele', Annee = '$Annee', type_carburant = '$fuelType', etat = '$status', prix_location = '$prixVoiture' 
    where matricule = '$matricule'";
    return $this->conn->query($sql);
  }

}
?>
