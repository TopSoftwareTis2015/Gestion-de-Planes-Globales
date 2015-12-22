<?php 

class MiAutoLoader{

	public static function archivoLoader($class){
		if(file_exists(APP_PATH . $class . '.php'))
			require APP_PATH . $class . '.php';
		elseif(file_exists(CONTROLLERS_PATH . $class . '.php'))
			require CONTROLLERS_PATH . $class . '.php';
		elseif(file_exists(MODELS_PATH . $class . '.php'))
			require MODELS_PATH . $class . '.php';
	}
}


 ?>