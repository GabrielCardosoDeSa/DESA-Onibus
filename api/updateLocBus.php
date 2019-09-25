<?php

    namespace safira;

    include_once($_SERVER['DOCUMENT_ROOT'].'/safira/model/Veiculo.php');



    $data = $_GET;

    $res = array('status' => 'success','message' => '');

    if(!isset($data['codBus']) && empty($data['codBus']))

    {

        $res = array('status' => 'error','message' => 'Favor informar o codigo do onibus');

    }

    else if(!isset($data['lat']) && empty($data['lat']))

    {

        $res = array('status' => 'error','message' => 'Favor informar a latitude');

    }

    else if(!isset($data['log']) && empty($data['log']))

    {

        $res = array('status' => 'error','message' => 'Favor informar a longitude');

    }

    else if(!isset($data['date']) && empty($data['date']))

    {

        $res = array('status' => 'error','message' => 'Favor informar a data');

    }

    else

    {

        //file_get_contents("http://robot-safira.000webhostapp.com/safira/api/updateLocBus.php?codBus=".$codBus."&lat=".$lat."&log=".$log."");

        //file_put_contents("log2.txt", json_encode($data)."\n", FILE_APPEND);



        $bus = new Veiculo();

        $bus = $bus->find("id = ".$data['codBus']);

        $bus[0]->setId($data['codBus']);

        $bus[0]->setLatitude($data['lat']);

        $bus[0]->setLongitude($data['log']);

        $bus[0]->setDataLocalizacao($data['date']);



        $bus[0]->save();

    }



    echo json_encode($res,true);

    //printf($data['teste']);



?>

