<?php 


	namespace bin\controlador;

	use config\componentes\configSistema as configSistema;

	class frontControlador extends configSistema{
		private $url;
		private $directory;
		private $controlador;

		public function __construct($request){
			if (isset($request["url"])) {
				$this->url = $request["url"];
				$sistem = new configSistema();
				$this->directory = $sistem->_DIR_();
				$this->controlador = $sistem->_Control_();
				$this->validarURL();
			}else{
				die("<script>window.location='?url=login'</script>");
			}
		}

		private function validarURL(){
			$pattern = preg_match_all("/^[a-zA-Z0-9-@\/.=:_#$]{1,700}$/", $this->url);
			if ($pattern == 1) {
				$this->_loadPage($this->url);
			}else{
				die('La URL ingresada es inválida');
			}
		}

		private function _loadPage($url){
			if(file_exists($this->directory.$url.$this->controlador)){
				require_once($this->directory.$url.$this->controlador);
			}else{
				$url = "home";
				if(file_exists($this->directory.$url.$this->controlador)){
					die("<script>window.location='?url=login'</script>");
			}else{
				die("<script>window.location='?url=login'</script>");
			}
		}
	}

 }


 ?>