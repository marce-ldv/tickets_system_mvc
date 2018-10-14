<?php  
	namespace config;

	use config\Request as Request;

	/**
	* 
	*/
	class Router{

		function __construct(Request $request){

			$controladora= $request->getControladora() /*. 'Controladora'*/;
			$metodo= $request->getMetodo();
			$parametros= $request->getParametros();
			
			$instance= "controller\\" . $controladora;
			$controladora= new $instance;
			
			if(empty($parametros)) {
				call_user_func(array($controladora, $metodo));
			
			}	else{
				call_user_func_array(array($controladora, $metodo), $parametros);
			}
		}

	}
?>