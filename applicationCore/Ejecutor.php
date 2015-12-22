<?php 

class Ejecutor{

	public static function run(Request $peticion){
		//Session::accesoSinLogin($peticion->getControlador());

		$controlador = $peticion->getControlador() . 'Controller';
		$metodo = $peticion->getMetodo();
		$argumentos = $peticion->getArgumentos();

		$rutaControlador = ROOT . 'controllers' . DS . $controlador . '.php';

		if(file_exists($rutaControlador)){
			$controlador = new $controlador();

			if(!method_exists($controlador, $metodo))
				$metodo = 'index';

			if(isset($argumentos))
				$controlador->{$metodo}($argumentos);
			else
				$controlador->{$metodo}();
		}
		else
			throw new Exception("No encontrado");
	}
}


 ?>