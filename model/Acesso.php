<?php

namespace safira;



include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Tables.php');


/**

 *

 */

class Acesso extends Tables

{

    // Caracteristicas da Tabela



    // Atributos da Tabela

    private $idPerfil;

	private $idFuncionalidade;


    // FUNCTIONS

    public function __construct()

    {

        $this->nameTable = "acesso";

        parent::__construct();

    }


    // GET AND SET

}

