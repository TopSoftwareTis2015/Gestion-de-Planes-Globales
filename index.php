<?php 

main();

function main(){
	try{

		configuracionInicial();
		configurarSesion();
		Ejecutor::run(new Request);
	
	} catch (Exception $e){

		echo $e->getMessage();
	} 
}

function configuracionInicial(){
	establecerRaiz();
	cargarConfiguracionGeneral();
}

function establecerRaiz(){
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FIle__)) . DS);
	define('APP_PATH', ROOT . 'applicationCore' . DS);

	define('CONTROLLERS_PATH', ROOT . 'controllers' . DS);
	define('MODELS_PATH', ROOT . 'models' . DS);
}

function cargarConfiguracionGeneral(){
	require_once APP_PATH . 'Config.php';

	activarCargaAutomatica();
}

function activarCargaAutomatica(){
	require_once APP_PATH . 'MiAutoLoader.php';
	spl_autoload_register('MiAutoLoader::archivoLoader');
}

function configurarSesion(){
	Session::init();
}

 ?>