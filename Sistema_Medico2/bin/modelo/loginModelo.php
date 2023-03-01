<?php 

	namespace modelo;
	use config\connect\connectDB as connectDB;


	class loginModelo extends connectDB{

	private $nombreApellido;
	private $correo;
	private $nombreUser;
	private $password;

	
    public function __construct()
	{
		parent::__construct();
	}

		public function getloginSistema( $nombreApellido, $correo, $nombreUser, $password){

	        $this->nombreApellido = $nombreApellido;
	        $this->correo = $correo;
	        $this->nombreUser = $nombreUser;
		   		$this->password = $password;
		      
	        return $this->loginSistema();
		}

		private function loginSistema(){
		
			$registrarUsuario = $this->conex->prepare("INSERT INTO `usuario`(`codUser`, `nombreApellido`, `correo`, `nombreUser`, `password`, `status`) VALUES (DEFAULT,?,?,?,?,1)");
			
			$registrarUsuario->bindValue(1, $this->nombreApellido);
			$registrarUsuario->bindValue(2, $this->correo);
			$registrarUsuario->bindValue(3, $this->nombreUser);
			$registrarUsuario->bindValue(4, $this->password);
			$registrarUsuario->execute();	
		}


		public function mostrarUsuario(){
      try{ 
      $registrar = $this->conex->prepare("SELECT * FROM usuario");
      $registrar->execute();

      return $registrar->fetchAll(\PDO::FETCH_OBJ);

        }catch(\PDOException $e){
          return $e;
        }
     }


     public function inicio($nombreUser, $password){
     	$this->nombreUser =$nombreUser;
     	$this->password =$password;
     	return $this->iniciar();
     }

     private function iniciar(){
			try{
     	$new = $this->conex->prepare( "SELECT * FROM `usuario` WHERE`nombreUser` = ? ");
     	$new->bindValue(1, $this->nombreUser);
     	$new->execute();
     	$data = $new->fetchAll();

     	if(isset($data[0]['password'])){
     		if($data[0]['password'] = $this->password){
     				$_SESSION['nombreApellido'] = $data[0]['nombreApellido'];
     				$_SESSION['correo'] = $data[0]['correo'];
     				$_SESSION['nombreUser'] = $data[0]['nombreUser']; 
     				header ("Location: ?url=dashboard");
     				
     		}else{
     			return " error usuario y clave";
     		}

     	}else{
     		return "error usuario y clave";
     	}

     	}catch(\PDOException $e){
     		 return $e;
     	}


     }





















     
	}
 ?>