<?php
namespace safira;

include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Tables.php');

/**
 *
 */
class VeiculoHistoricoLoc extends Tables
{
    // Caracteristicas da Tabela

    // Atributos da Tabela
    private $id; 
    private $idVeiculo; 
    private $latitude; 
    private $longitude;
    private $dataLocalizacao; 
    private $dataCriacao; 
    private $dataExclusao;

    // FUNCTIONS
    public function __construct()
    {
        $this->nameTable = "veiculo_historico_loc";
        parent::__construct();
    }

    // GET AND SET
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdVeiculo()
    {
        return $this->idVeiculo;
    }

    /**
     * @param mixed $idVeiculo
     *
     * @return self
     */
    public function setIdVeiculo($idVeiculo)
    {
        $this->idVeiculo = $idVeiculo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataLocalizacao()
    {
        return $this->dataLocalizacao;
    }

    /**
     * @param mixed $dataLocalizacao
     *
     * @return self
     */
    public function setDataLocalizacao($dataLocalizacao)
    {
        $this->dataLocalizacao = $dataLocalizacao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * @param mixed $dataCriacao
     *
     * @return self
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataExclusao()
    {
        return $this->dataExclusao;
    }

    /**
     * @param mixed $dataExclusao
     *
     * @return self
     */
    public function setDataExclusao($dataExclusao)
    {
        $this->dataExclusao = $dataExclusao;

        return $this;
    }
}
