<?php
namespace safira;

include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Veiculo.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/safira/controller/Controller.php');

use safira\Bus;
/**
 *
 */
class InitialController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function teste()
    {
        $bus = new Veiculo();

//        $bus->setId("1");
//        $bus->setDescription("teste");
//        $bus->setLatitude("123123123");
//        $bus->setLongitude(null);
//        $bus->setDateCreated(null);
//        $bus->setDateUpdated(null);
//        $bus->setDateDelete(null);
//
//        $bus->save();
//        print_r("passou");

        $teste = $bus->find("id = 1");
        print_r("<br>");
        print_r($teste[0]->getDescricao());
        print_r("<br>");
        print_r('<input type="text" id="latitude" value="'.$teste[0]->getLatitude().'">');
        print_r("<br>");
        print_r('<input type="text" id="longitude" value="'.$teste[0]->getLongitude().'">');
        print_r("<br>");
        print_r($teste[0]->getDataLocalizacao());

    }

    public function getLocVehicles($data)
    {

    }
}
