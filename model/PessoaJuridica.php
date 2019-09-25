<?php

namespace safira;



include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Tables.php');


/**

 *

 */

class PessoaFisica extends Tables

{

    // Caracteristicas da Tabela

    // Atributos da Tabela

    private $id;

	private $idPessoa;

    private $nomeFantasia;

    private $razaoSocial;

    private $cnpj;

    private $ie;

    private $dataAbertura;

	private $dataCriacao;

	private $dataAtualizacao;

    private $dataExclusao;


    // FUNCTIONS

    public function __construct()

    {

        $this->nameTable = "pessoa_juridica";

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
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @param mixed $idPessoa
     *
     * @return self
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * @param mixed $nomeFantasia
     *
     * @return self
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @param mixed $razaoSocial
     *
     * @return self
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIe()
    {
        return $this->ie;
    }

    /**
     * @param mixed $ie
     *
     * @return self
     */
    public function setIe($ie)
    {
        $this->ie = $ie;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    /**
     * @param mixed $dataAbertura
     *
     * @return self
     */
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;

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

