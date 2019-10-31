<?php

namespace onibus;

include_once('../../config.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/model/Tables.php');


/**

 *

 */

class Pessoa extends Tables

{

    // Caracteristicas da Tabela



    // Atributos da Tabela

    private $id;

	private $tipoPessoa; //PF,PJ

	private $dataCriacao;

	private $dataAtualizacao;

    private $dataExclusao;


    // FUNCTIONS

    public function __construct()

    {

        $this->nameTable = "pessoa";

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
    public function getTipoPessoa()
    {
        return $this->tipoPessoa;
    }

    /**
     * @param mixed $tipoPessoa
     *
     * @return self
     */
    public function setTipoPessoa($tipoPessoa)
    {
        $this->tipoPessoa = $tipoPessoa;

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

