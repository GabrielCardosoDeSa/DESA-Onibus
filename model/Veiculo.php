<?php
namespace safira;

include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Tables.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/VeiculoHistoricoLoc.php');

use safira\VeiculoHistoricoLoc;
/**
 *
 */
class Veiculo extends Tables
{
    // Caracteristicas da Tabela

    // Atributos da Tabela
    private $id;
	private $idTipo;
	private $idStatus;
	private $descricao;
	private $placa;
	private $ano;
	private $cor;
	private $latitude;
	private $longitude;
	private $dataLocalizacao;
	private $dataCriacao;
	private $dataAtualizacao;
	private $dataExclusao;

    // FUNCTIONS
    public function __construct()
    {
        $this->nameTable = "veiculo";
        parent::__construct();
    }

    protected function afterSave()
    {
        $historicoVeiculos = new VeiculoHistoricoLoc();
        $historicoVeiculos->setIdVeiculo($this->getId());
        $historicoVeiculos->setLatitude($this->getLatitude());
        $historicoVeiculos->setLongitude($this->getLongitude());
        $historicoVeiculos->setDataLocalizacao($this->getDataLocalizacao());
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
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * @param mixed $idTipo
     *
     * @return self
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * @param mixed $idStatus
     *
     * @return self
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * @param mixed $placa
     *
     * @return self
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     *
     * @return self
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     *
     * @return self
     */
    public function setCor($cor)
    {
        $this->cor = $cor;

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
    public function getDataAtualizacao()
    {
        return $this->dataAtualizacao;
    }

    /**
     * @param mixed $dataAtualizacao
     *
     * @return self
     */
    public function setDataAtualizacao($dataAtualizacao)
    {
        $this->dataAtualizacao = $dataAtualizacao;

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
