<?php  
	namespace config;

	//use Config\SingleTon as SingleTon;

	/**
	* 
	*/
	class Request /*extends SingleTon*/{
		
		private $controladora;
		private $metodo;
		private $parametros= array();

		function __construct(){
			
			$actual_link = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$urlSeparada= explode('/', $actual_link);
			$urlSeparada= array_filter($urlSeparada);

			if (!empty($urlSeparada)) {
				$this->controladora= ucwords(array_shift($urlSeparada));
				
			}	else{
				$this->controladora= 'ControllerUser';

			}

			if (!empty($urlSeparada)) {
				$this->metodo= array_shift($urlSeparada);
			
			}	else{
				$this->metodo= 'viewLogin';

			}

			if ($this->getMethod() === "GET") {
				if (!empty($urlSeparada)) {
					$this->parametros= $urlSeparada;
				
				}
			
			}	else{
				$this->parametros= $_POST;

			}

		}

		public function getControladora(){
			return $this->controladora;
		}

		public function setControladora($controladora='ControllerUser'){
			$this->controladora= $controladora;
		}

		public function getMetodo(){
			return $this->metodo;
		}

		public function setMetodo($metodo='viewLogin'){
			$this->metodo= $metodo;
		}

		public function getParametros(){
			return $this->parametros;
		}

		public function setParametros($parametros=''){
			$this->parametros[]= $parametros;
		}

		public function getMethod(){
			return $_SERVER['REQUEST_METHOD'];
		}
	}


?>