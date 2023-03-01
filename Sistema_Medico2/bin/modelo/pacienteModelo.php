<?php
	
namespace modelo;
use config\connect\connectDB as connectDB;

class pacienteModelo extends connectDB{
		
		private $numHistoriaMedica;
		private $segundoNombre; 
		private $segundoApellido;
		private $edadPaciente;
		private $sexoPaciente;
		private $fechaNacimientoPaciente;
		private $lugarNacimientoPaciente;
		private $direccionPaciente;
		private $estado;
    private $contactoEmergencia;
	  
        
	
    public function __construct()
	{

		parent::__construct();

	}


	public function buscarpaciente($numHistoriaMedica){

				$this->numHistoriaMedica = $numHistoriaMedica;  	     
        return $this->consultapaciente();
	}

	private function consultapaciente(){

		$registrarPaciente = $this->conex->prepare("SELECT `nombrePaciente`, `apellidoPaciente`, `correoPaciente`, `telefonoPaciente` FROM `paciente` WHERE `numHistoriaMedica` = ?");
		
		$registrarPaciente->bindValue(1, $this->numHistoriaMedica);

		$registrarPaciente->execute();	

		$respuesta =  $registrarPaciente->fetchAll(\PDO::FETCH_OBJ);
    echo json_encode($respuesta);
    die();
	}

	public function guardarpaciente($numHistoriaMedica, $nombre, $apellido, $edad, $sexo, $fecha, $lugar, $direccion, $estado, $emergencia){

						$this->segundoNombre = $nombre;
            $this->segundoApellido = $apellido;
            $this->edadPaciente = $edad;
            $this->sexoPaciente = $sexo;
            $this->fechaNacimientoPaciente = $fecha;
            $this->lugarNacimientoPaciente = $lugar;
            $this->direccionPaciente = $direccion;
            $this->estado = $estado;
            $this->contactoEmergencia = $emergencia;
            $this->numHistoriaMedica = $numHistoriaMedica;
        		 	return $this->datos();
	}

	private function datos(){
		
		$registrarPaciente = $this->conex->prepare("UPDATE `paciente` SET `segundoNombre` = ?,`segundoApellido` = ? , `edadPaciente` = ?, `sexoPaciente`= ?, `fechaNacimientoPaciente` = ? ,`lugarNacimientoPaciente` = ?, `direccionPaciente` = ?, `estado` = ?, `contactoEmergencia` = ? WHERE `numHistoriaMedica` = ? ");
		
		$registrarPaciente->bindValue(1, $this->segundoNombre);
		$registrarPaciente->bindValue(2, $this->segundoApellido);
		$registrarPaciente->bindValue(3, $this->edadPaciente);
		$registrarPaciente->bindValue(4, $this->sexoPaciente);
		$registrarPaciente->bindValue(5, $this->fechaNacimientoPaciente);
		$registrarPaciente->bindValue(6, $this->lugarNacimientoPaciente);
		$registrarPaciente->bindValue(7, $this->direccionPaciente );
		$registrarPaciente->bindValue(8, $this->estado);	
		$registrarPaciente->bindValue(9, $this->contactoEmergencia);
		$registrarPaciente->bindValue(10, $this->numHistoriaMedica);
		$registrarPaciente->execute();
		$registrarPaciente =['Registro Exitoso'];
		echo json_encode($registrarPaciente);
			    die();
	}

  public function consultarDatosPaciente(){
      try{ 
      $registrar = $this->conex->prepare("SELECT * FROM `paciente`  WHERE `status` = 1");
      $registrar->execute();

      return $registrar->fetchAll(\PDO::FETCH_OBJ);

        }catch(\PDOException $e){
          return $e;
        }
     }

}
?>