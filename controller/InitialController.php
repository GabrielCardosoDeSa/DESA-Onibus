<?php

namespace onibus;

include_once('../../config.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/model/Veiculo.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/controller/Controller.php');

/**

 *

 */

class InitialController extends Controller

{



    public function __construct()

    {

        parent::__construct();

    }


    public function getLocVehicles($data)

    {



    }

}

