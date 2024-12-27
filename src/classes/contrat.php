<?php 
  include '../db/config.php';

class Contrat {
    private $contraid;
    private $voitureid;
    private $clientid;
    private $datedebut;
    private $datefin;
    private $duree;
    private $prixtotal;
    private $conn;
  
    public function __construct($conn,$voitureid,$clientid,$datedebut,$datefin,$duree,$prixtotal){
      $this->voitureid = $voitureid;
      $this->clientid = $clientid;
      $this->datedebut = $datedebut;
      $this->datefin = $datefin;
      $this->duree = $duree;
      $this->prixtotal = $prixtotal;
      $this->conn = $conn;
    }

    public function getVoitureId() {
        return $this->voitureid;
    }

    public function getClientId() {
        return $this->clientid;
    }

    public function getDateDebut() {
        return $this->datedebut;
    }

    public function getDateFin() {
        return $this->datefin;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getPrixTotal() {
        return $this->prixtotal;
    }

    public function getConnection() {
        return $this->conn;
    }

    // Setters
    public function setVoitureId($voitureid) {
        $this->voitureid = $voitureid;
    }

    public function setClientId($clientid) {
        $this->clientid = $clientid;
    }

    public function setDateDebut($datedebut) {
        $this->datedebut = $datedebut;
    }

    public function setDateFin($datefin) {
        $this->datefin = $datefin;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function setPrixTotal($prixtotal) {
        $this->prixtotal = $prixtotal;
    }

    public function setConnection($conn) {
        $this->conn = $conn;
    }
  

    public function selectOneContrat($id){
      $sql = "SELECT * from contrat,voiture where contrat_id='$id' and voiture.matricule = contrat.voiture_id";
      $result = $this->conn->query($sql);
      return $result;
    }

    public function getContrat(){
      $sql = "SELECT * from contrat";
      $result = $this->conn->query($sql);
      return $result;
    }
  

    public function selectTotalPrix($idvoiture){
        $sql = "SELECT prix_location from Voiture where matricule = '$idvoiture'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getjointContratVoiture(){
        $sql = "SELECT * from contrat,voiture where voiture.matricule = contrat.voiture_id";
        $result = $this->conn->query($sql);
        return $result;
      }

    public function getjointContratVoitureClient(){
        $sql = "SELECT * from contrat,voiture,client WHERE voiture.matricule = contrat.voiture_id and contrat.client_id=client.client_id";
        $result = $this->conn->query($sql);
        return $result;
    }


  }
?>