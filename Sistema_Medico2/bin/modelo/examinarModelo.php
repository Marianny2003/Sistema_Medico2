<?php 

	namespace modelo;
	use config\connect\connectDB as connectDB;

		class examinarModelo extends connectDB{

		private $fechaC;
		private $horaC;
		private $historiaM;
		private $exaFuncional;
		private $checkCardio;
		private $sisCardio;
		private $checkRespiratorio;
		private $sisRespiratorio;
		private $checkGastro;
		private $sisGastro;
		private $checkGenito;
		private $sisGenito;
		private $checkOsteo;
		private $sisOsteo;
		private $checkNeuro;
		private $sisNeuro;
		private $checkEndo;
		private $sisEndo;
		private $exaFisico;
		private $sigSedente;
		private $sigDecubito;
		private $sigBidepestacion;
		private $talla;
		private $peso;
		private $IMC;
		private $frecuRespiratoria;
		private $frecuCardiaca;
		private $temperatura;
		private $preArterial;
		private $exaPrevio;
		private $diagnostico;
		private $tratamiento;
		private $indicaciones;


		public function __construct(){
			parent::__construct(); 
		}


		
		public function buscarpaciente($numHistoriaMedica){

		$this->numHistoriaMedica = $numHistoriaMedica;  	     
        return $this->consultapaciente();
	}

	private function consultapaciente(){

		$registrarPaciente = $this->conex->prepare("SELECT `numHistoriaMedica`, `cedulaPaciente`, `nombrePaciente`, `apellidoPaciente` FROM `paciente` WHERE `numHistoriaMedica` = ?");
		
		$registrarPaciente->bindValue(1, $this->numHistoriaMedica);
		$registrarPaciente->execute();	

		$respuesta =  $registrarPaciente->fetchAll(\PDO::FETCH_OBJ);
    echo json_encode($respuesta);
    die();
	}



			public function guardarConsulta($fechaConsulta, $horaConsulta, $historiaMedica, $exaFuncional, $checkCardio, $sisCardio, $checkRespiratorio, $sisRespiratorio, $checkGastro, $sisGastro, $checkGenito, $sisGenito, $checkOsteo, $sisOsteo, $checkNeuro, $sisNeuro, $checkEndo, $sisEndo, $exaFisico, $sigSedente, $sigDecubito, $sigBidepestacion, $talla, $peso, $IMC, $frecuRespiratoria, $frecuCardiaca, $temperatura, $preArterial, $exaPrevio, $diagnostico, $tratamiento, $indicaciones){


				
				

				$this->fechaC = $fechaConsulta;
				$this->horaC = $horaConsulta;
				$this->historiaM = $historiaMedica;
				$this->exaFuncional = $exaFuncional;
				$this->checkCardio = $checkCardio;
				$this->sisCardio = $sisCardio;
				$this->checkRespiratorio = $checkRespiratorio;
				$this->sisRespiratorio = $sisRespiratorio;
				$this->checkGastro = $checkGastro;
				$this->sisGastro = $sisGastro;
				$this->checkGenito = $checkGenito;
				$this->sisGenito = $sisGenito;
				$this->checkOsteo = $checkOsteo;
				$this->sisOsteo = $sisOsteo;
				$this->checkNeuro = $checkNeuro;
				$this->sisNeuro = $sisNeuro;
				$this->checkEndo = $checkEndo;
				$this->sisEndo = $sisEndo;
				$this->exaFisico = $exaFisico;
				$this->sigSedente = $sigSedente;
				$this->sigDecubito = $sigDecubito;
				$this->sigBidepestacion = $sigBidepestacion;
				$this->talla = $talla;
				$this->peso = $peso;
				$this->IMC = $IMC;
				$this->frecuRespiratoria = $frecuRespiratoria;
				$this->frecuCardiaca = $frecuCardiaca;
				$this->temperatura = $temperatura;
				$this->preArterial = $preArterial;
				$this->exaPrevio = $exaPrevio;
				$this->diagnostico = $diagnostico;
				$this->tratamiento = $tratamiento;
				$this->indicaciones = $indicaciones;



				return $this->datosConsulta();
		}


		private function datosConsulta(){
			try {

			$new = $this->conex->prepare("INSERT INTO `consulta`(`numConsulta`,`fechaConsulta`,`horaConsulta`, `status`,`numHistoriaMedica`) VALUES(DEFAULT,?, ?, 1, ?)");

					$new->bindValue(1,$this->fechaC);
					$new->bindValue(2,$this->horaC);
					$new->bindValue(3,$this->historiaM);
					$new->execute();
					$consultaID = $this->conex->lastInsertId();

			$new = $this->conex->prepare("INSERT INTO `examenfuncional`(`codExamenFuncional`,`descripcionExamenFuncional`,`status`, `numConsulta`) VALUES (DEFAULT,?, 1,?)");

					$new->bindValue(1,$this->exaFuncional);
					$new->bindValue(2, $consultaID);
					$new->execute();
					$exaFuncionalID = $this->conex->lastInsertId();

			$new = $this->conex->prepare("INSERT INTO `tipoexamen`(`codTipoExamen`, `nombreTipoExamen`, `descripcionTipoExamen`, `status`, `codExamenFuncional`) VALUES(DEFAULT,?,?,1,?)");

					$new->bindValue(1, $this->checkCardio);
					$new->bindValue(2, $this->sisCardio);
					$new->bindValue(3, $exaFuncionalID);
					$new->execute();

			$new = $this->conex->prepare("INSERT INTO `tipoexamen`(`codTipoExamen`,`nombreTipoExamen`, `descripcionTipoExamen`, `status`, `codExamenFuncional`) VALUES(DEFAULT,?,?,1,?)");

					$new->bindValue(1, $this->checkRespiratorio);
					$new->bindValue(2, $this->sisRespiratorio);
					$new->bindValue(3, $exaFuncionalID);
					$new->execute();

			$new = $this->conex->prepare("INSERT INTO `tipoexamen`(`codTipoExamen`,`nombreTipoExamen`, `descripcionTipoExamen`, `status`, `codExamenFuncional`) VALUES(DEFAULT,?,?,1,?)");

					$new->bindValue(1, $this->checkGastro);
					$new->bindValue(2, $this->sisGastro);
					$new->bindValue(3, $exaFuncionalID);
					$new->execute();

			$new = $this->conex->prepare("INSERT INTO `tipoexamen`(`codTipoExamen`,`nombreTipoExamen`, `descripcionTipoExamen`, `status`, `codExamenFuncional`) VALUES(DEFAULT,?,?,1,?)");

					$new->bindValue(1, $this->checkGenito);
					$new->bindValue(2, $this->sisGenito);
					$new->bindValue(3, $exaFuncionalID);
					$new->execute();


			$new = $this->conex->prepare("INSERT INTO `tipoexamen`(`codTipoExamen`,`nombreTipoExamen`, `descripcionTipoExamen`, `status`, `codExamenFuncional`) VALUES(DEFAULT,?,?,1,?)");

					$new->bindValue(1, $this->checkOsteo);
					$new->bindValue(2, $this->sisOsteo);
					$new->bindValue(3, $exaFuncionalID);
					$new->execute();

			$new = $this->conex->prepare("INSERT INTO `tipoexamen`(`codTipoExamen`,`nombreTipoExamen`, `descripcionTipoExamen`, `status`, `codExamenFuncional`) VALUES(DEFAULT,?,?,1,?)");

					$new->bindValue(1, $this->checkNeuro);
					$new->bindValue(2, $this->sisNeuro);
					$new->bindValue(3, $exaFuncionalID);
					$new->execute();

			$new = $this->conex->prepare("INSERT INTO `tipoexamen`(`codTipoExamen`,`nombreTipoExamen`, `descripcionTipoExamen`, `status`, `codExamenFuncional`) VALUES(DEFAULT,?,?,1,?)");

					$new->bindValue(1, $this->checkEndo);
					$new->bindValue(2, $this->sisEndo);
					$new->bindValue(3, $exaFuncionalID);
					$new->execute();

			$new = $this->conex->prepare("INSERT INTO `examenfisico`(`codExamenFisico`,`descripcionExamenFisico`, `signoDecubito`, `signoSedente`, `signoBidepestacion`, `frecuenciaRespiratoria`, `frecuenciaCardiaca`, `peso`, `talla`, `IMC`, `temperatura`, `presionArterial`,`status`,`numConsulta`) VALUES(DEFAULT,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1, ?)");

					$new->bindValue(1, $this->exaFisico);
					$new->bindValue(2, $this->sigDecubito);
					$new->bindValue(3, $this->sigSedente);
					$new->bindValue(4, $this->sigBidepestacion);
					$new->bindValue(5, $this->frecuRespiratoria);
					$new->bindValue(6, $this->frecuCardiaca);
					$new->bindValue(7, $this->peso);
					$new->bindValue(8, $this->talla);
					$new->bindValue(9, $this->IMC);
					$new->bindValue(10, $this->temperatura);
					$new->bindValue(11, $this->preArterial);
					$new->bindValue(12, $consultaID);
					$new->execute();

			$new = $this->conex->prepare("INSERT INTO `examenesprevios`(`codExaPrevio`,`descripcionExamenPrevios`, `status`, `numHistoriaMedica`, `numConsulta`) VALUES(DEFAULT,?, 1, ?, ?)");

					$new->bindValue(1, $this->exaPrevio);
					$new->bindValue(2, $this->historiaM);
					$new->bindValue(3, $consultaID);
					$new->execute();
					

			$new = $this->conex->prepare("INSERT INTO `diagnostico`(`numDiagnostico`,`descripcionDiagnostico`, `status`, `numConsulta`) VALUES(DEFAULT,?, 1, ?)");

					$new->bindValue(1, $this->diagnostico);
					$new->bindValue(2, $consultaID);
					$new->execute();
					$diagnosticoID = $this->conex->lastInsertId();


			$new = $this->conex->prepare("INSERT INTO `tratamiento`(`numTratamiento`,`indicacionesTratamiento`, `medicamentosTratamiento`,`status`, `numDiagnostico`) VALUES(DEFAULT,?, ?, 1, ?)"); 

					$new->bindValue(1, $this->indicaciones);
					$new->bindValue(2, $this->tratamiento);
					$new->bindValue(3, $diagnosticoID);
					$new->execute();

					$registro = ['Registro Exitoso'];
					echo json_encode($registro);
					die();
			

			} catch (\PDOException $e) {
				return $e;
			}

			}


		public function mostrarPaciente(){
			try{ 
		 	$new = $this->conex->prepare("SELECT * FROM paciente");
		 	$new->execute();

		 	return $new->fetchAll(\PDO::FETCH_OBJ);

		  	}catch(\PDOException $e){
		  		return $e;
		  	}
		 }


		 public function infoPaciente($id){
        	try {
        		$this->id = $id;
        		$new = $this->conex->prepare("SELECT * FROM paciente p WHERE p.status = 1 and p.numHistoriaMedica = ?");
        		$new->bindValue(1, $this->id);
        		$new->execute();
        		$info = $new->fetchAll(\PDO::FETCH_OBJ);
        		echo json_encode($info);
        		die();
        	} catch (\PDOException $e) {
        		return $e;
        	}
        }

	}


 ?>