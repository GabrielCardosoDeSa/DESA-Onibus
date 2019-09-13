<?php
namespace safira;

include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Tables.php');

/**
 *
 */
class Bus extends Tables
{
    // Caracteristicas da Tabela

    // Atributos da Tabela
    private $id;
    private $description;
    private $latitude;
    private $longitude;
    private $dateCreated;
    private $dateUpdated;
    private $dateDelete;

    // FUNCTIONS
    public function __construct()
    {
        $this->nameTable = "bus";
        parent::__construct();
    }

    // GET AND SET

    public function getId(){
      return $this->id;
    }
    public function setId($id){
      $this->id = $id;
    }

    public function getDescription(){
      return $this->description;
    }
    public function setDescription($description){
      $this->description = $description;
    }

    public function getLatitude(){
      return $this->latitude;
    }
    public function setLatitude($latitude){
      $this->latitude = $latitude;
    }

    public function getLongitude(){
      return $this->longitude;
    }
    public function setLongitude($longitude){
      $this->longitude = $longitude;
    }

    public function getDateCreated(){
      return $this->dateCreated;
    }
    public function setDateCreated($dateCreated){
      $this->dateCreated = $dateCreated;
    }

    public function getDateUpdated(){
      return $this->dateUpdated;
    }
    public function setDateUpdated($dateUpdated){
      $this->dateUpdated = $dateUpdated;
    }

    public function getDateDelete(){
      return $this->dateDelete;
    }
    public function setDateDelete($dateDelete){
      $this->dateDelete = $dateDelete;
    }

}
