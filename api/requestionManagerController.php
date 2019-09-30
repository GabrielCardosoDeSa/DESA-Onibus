<?php

	namespace onibus;
	
	$data = '';

	if(!isset($_POST['data']) && empty($_POST['data']))

	{

		echo "Erro dados nao enviados!!!";

		exit;

	}



	if(!isset($data['action']) && empty($data['action']))

	{

		echo "Erro ação nao enviada!!!";

		exit;

	}



	if(!isset($data['controller']) && empty($data['controller']))

	{

		echo "Erro Controlador nao enviada!!!";

		exit;

	}



	$data = json_decode($_POST);



	$action = $data['action'];

	$controller = $data['controller'];



	include_once($_SERVER['DOCUMENT_ROOT'].'/DeSa-Onibus/controller/'.$controller.'.php');



	$object = new $controller();

	echo $object->$action($data);

