<?php
class Voiture {
  private $matricule;
  private $marque;
  private $modele;
  private $Annee;
  private $fuelType;
  private $status;
  private $prixvoiture;
  private $imageName;
  private $targetDir;
  private $imagevoiture;
  private $conn;

  public function __construct($conn, $matricule, $marque, $modele, $Annee, $fuelType, $status, $prixvoiture, $imageName, $targetDir, $imagevoiture) {
    $this->matricule = $matricule;
    $this->marque = $marque;
    $this->modele = $modele;
    $this->Annee = $Annee;
    $this->fuelType = $fuelType;
    $this->status = $status;
    $this->prixvoiture = $prixvoiture;
    $this->imageName = $imageName;
    $this->targetDir = $targetDir;
    $this->imagevoiture = $imagevoiture;
    $this->conn = $conn;
  }

  public function getMatricule() {
    return $this->matricule;
  }

  public function getMarque() {
    return $this->marque;
  }

  public function getModele() {
    return $this->modele;
  }

  public function getAnnee() {
    return $this->Annee;
  }

  public function getFuelType() {
    return $this->fuelType;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getPrixVoiture() {
    return $this->prixvoiture;
  }

  public function getImageName() {
    return $this->imageName;
  }

  public function getTargetDir() {
    return $this->targetDir;
  }

  public function getImageVoiture() {
    return $this->imagevoiture;
  }

  public function getConn() {
    return $this->conn;
  }

  public function setMatricule($matricule) {
    $this->matricule = $matricule;
  }

  public function setMarque($marque) {
    $this->marque = $marque;
  }

  public function setModele($modele) {
    $this->modele = $modele;
  }

  public function setAnnee($Annee) {
    $this->Annee = $Annee;
  }

  public function setFuelType($fuelType) {
    $this->fuelType = $fuelType;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function setPrixVoiture($prixvoiture) {
    $this->prixvoiture = $prixvoiture;
  }

  public function setImageName($imageName) {
    $this->imageName = $imageName;
  }

  public function setTargetDir($targetDir) {
    $this->targetDir = $targetDir;
  }

  public function setImageVoiture($imagevoiture) {
    $this->imagevoiture = $imagevoiture;
  }

  public function setConn($conn) {
    $this->conn = $conn;
  }

  public function getVoiture(){
    $sql = "SELECT * from voiture";
    return $this->conn->query($sql);
  }

  public function getOneVoiture($matricule){
    $sql = "SELECT * from voiture where matricule = '$matricule'";
    return $this->conn->query($sql);
  }
}
?>
