<?php

	namespace modelo;
	use config\connect\connectDB as connectDB;
	use modelo\reporteModelo as reporte; 
  class mostrarpacienteModelo extends connectDB{

    public function __construct()
	{
		parent::__construct();
	}
		  /*Ver consulta php*/ 
	public function consultarDatos(){
		
						$consultarPaciente = $this->conex->prepare("SELECT * FROM `paciente`  WHERE `status` = 1");
						$consultarPaciente ->execute();
				    return $consultarPaciente->fetchAll(\PDO::FETCH_ASSOC);
	}
								  /*Ver consulta Modal*/ 
	public function verPaciente($numHistoriaMedica){
						$this->numHistoriaMedica = $numHistoriaMedica;
				    return $this->consultapaciente();
	}

	private function consultapaciente(){

		$registrarPaciente = $this->conex->prepare("SELECT `cedulaPaciente`, `nombrePaciente`, `segundoNombre`, `apellidoPaciente`, `segundoApellido`, `edadPaciente`, `sexoPaciente`, `fechaNacimientoPaciente`, `lugarNacimientoPaciente`, `direccionPaciente`, `estado`, `correoPaciente`, `telefonoPaciente`, `contactoEmergencia`, `status` FROM `paciente` WHERE `numHistoriaMedica` = ?");
		
						$registrarPaciente->bindValue(1, $this->numHistoriaMedica);
						$registrarPaciente->execute();	
						$respuesta =  $registrarPaciente->fetchAll(\PDO::FETCH_OBJ);
				    echo json_encode($respuesta);
				    die();
	} 		
 									/*Ver Actualizar Modal*/ 

	public function guardarpaciente( $cedula, $nombre, $segundoNombre, $apellido, $segundoApellido, $edad, $sexo, $fecha, $lugar, $direccion, $estado, $coreo, $telefono, $emergencia){

				
						$this->cedulaPaciente = $cedula;
            $this->nombrePaciente = $nombre;
            $this->segundoNombre = $segundoNombre;
            $this->apellidoPaciente = $apellido;
            $this->segundoApellido = $segundoApellido;
						$this->edadPaciente = $edad;
            $this->sexoPaciente = $sexo;
            $this->fechaNacimientoPaciente = $fecha;
            $this->lugarNacimientoPaciente = $lugar;
            $this->direccionPaciente = $direccion;
            $this->estado = $estado;
            $this->correoPaciente = $coreo;
            $this->telefonoPaciente = $telefono;
            $this->contactoEmergencia = $emergencia;
        		return $this->pacienteEditar();
	}
									/*Actualizar Modal*/ 
	private function pacienteEditar(){
		
		$editarPaciente = $this->conex->prepare("UPDATE `paciente` SET `cedulaPaciente` = ?,`nombrePaciente` = ?,`segundoNombre` = ?,`apellidoPaciente` = ? ,`segundoApellido` = ? , `edadPaciente` = ?, `sexoPaciente`= ?, `fechaNacimientoPaciente` = ? ,`lugarNacimientoPaciente` = ?, `direccionPaciente` = ?, `estado` = ?,`correoPaciente` = ?,`telefonoPaciente` = ?, `contactoEmergencia` = ? WHERE `cedulaPaciente` = ? ");
		
					$editarPaciente->bindValue(1, $this->cedulaPaciente);
					$editarPaciente->bindValue(2, $this->nombrePaciente);
					$editarPaciente->bindValue(3, $this->segundoNombre);
					$editarPaciente->bindValue(4, $this->apellidoPaciente);
					$editarPaciente->bindValue(5, $this->segundoApellido);
					$editarPaciente->bindValue(6, $this->edadPaciente);
					$editarPaciente->bindValue(7, $this->sexoPaciente);
					$editarPaciente->bindValue(8, $this->fechaNacimientoPaciente);
					$editarPaciente->bindValue(9, $this->lugarNacimientoPaciente);
					$editarPaciente->bindValue(10, $this->direccionPaciente );
					$editarPaciente->bindValue(11, $this->estado);
					$editarPaciente->bindValue(12, $this->correoPaciente);
					$editarPaciente->bindValue(13, $this->telefonoPaciente);	
					$editarPaciente->bindValue(14, $this->contactoEmergencia);
					$editarPaciente->bindValue(15, $this->cedulaPaciente);
					$editarPaciente->execute();
	 				$respuesta = array('respuesta' => 1);
	        echo json_encode($respuesta);
	        die();
               
	}

  public function consultarDatosPaciente(){
      try{ 
			      $registrar = $this->conex->prepare("SELECT * FROM paciente WHERE `status` = 1");
			      $registrar->execute();
      			return $registrar->fetchAll(\PDO::FETCH_OBJ);
				    }catch(\PDOException $e){
				    return $e;
				    }
	} 

     									/*Ver Eliminar Modal*/ 

public function borrar($borrar){
						
						$eliminarpaciente = $this->conex->prepare("UPDATE `paciente` SET `status` = 0 WHERE `numHistoriaMedica` = ? ");
						$eliminarpaciente->bindValue(1, $borrar);
						$eliminarpaciente->execute();
				 		$respuesta = array('respuesta' => 1);
				    echo json_encode($respuesta);
				    die();          	
	}

	public function verreporte($numHistoriaMedica){
		$this->numHistoriaMedica= $numHistoriaMedica;

		$consultaReporte = $this->conex->prepare("SELECT `cedulaPaciente`, `nombrePaciente`, `segundoNombre`, `apellidoPaciente`, `segundoApellido`, `edadPaciente`, `sexoPaciente`, `fechaNacimientoPaciente`, `lugarNacimientoPaciente`, `direccionPaciente`, `estado`, `correoPaciente`, `telefonoPaciente`, `contactoEmergencia`, `status` FROM `paciente` WHERE `numHistoriaMedica` = ?");
		
						$consultaReporte->bindValue(1, $this->numHistoriaMedica);
						$consultaReporte->execute();	
						$respuesta =  $consultaReporte->fetchAll(\PDO::FETCH_ASSOC);
						
						$reporte=new reporte;
				    $reporte->AddPage();
						$reporte->FancyTable($respuesta);
						$reporte->Output();
	} 	


}
?>
