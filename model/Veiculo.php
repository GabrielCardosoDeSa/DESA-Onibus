<?php

namespace onibus;

include_once('../../config.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/model/Tables.php');


/**

 *

 */
class Veiculo extends Tables

{

    // Caracteristicas da Tabela

    // Atributos da Tabela

    private $id;

	private $idLocalizacao;

    private $idStatus;

    private $idTipo;

    private $placa;

    private $km;

    private $cor;

    private $ano;

	private $dataCriacao;

	private $dataAtualizacao;

    private $dataExclusao;


    // FUNCTIONS

    public function __construct()

    {

        $this->nameTable = "veiculo";

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
    public function getIdLocalizacao()
    {
        return $this->idLocalizacao;
    }

    /**
     * @param mixed $idLocalizacao
     *
     * @return self
     */
    public function setIdLocalizacao($idLocalizacao)
    {
        $this->idLocalizacao = $idLocalizacao;

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
    public function getKm()
    {
        return $this->km;
    }

    /**
     * @param mixed $km
     *
     * @return self
     */
    public function setKm($km)
    {
        $this->km = $km;

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

