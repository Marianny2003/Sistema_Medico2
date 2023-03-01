<?php 

	namespace modelo;
	use config\connect\connectDB as connectDB;

	class dashboardModelo extends connectDB{

		private $usuario;
		private $password;
		private $nombreC;
		private $correo;
		private $confirpassword;

		
	    public function __construct()
		{
			parent::__construct();
		}


	}






 ?>