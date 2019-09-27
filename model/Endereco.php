<?php

namespace safira;



include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Tables.php');


/**

 *

 */
class Endereco extends Tables

{

    // Caracteristicas da Tabela

    // Atributos da Tabela

    private $id;

	private $idPessoa; 

    private $idPessoa; 

    private $nome;

	private $dataCriacao;

	private $dataAtualizacao;

    private $dataExclusao;


    // FUNCTIONS

    public function __construct()

    {

        $this->nameTable = "contato_tipo";

        parent::__construct();

    }


    // GET AND SET

    
}