<?php

    namespace modelo;
	use config\connect\connectDB as connectDB;

	class catalogoModelo extends connectDB{
	private $historiaMedica;	
	private $descripcionPatologia;
	private $descripcionHabPsico;
	private $descripcionAntFam;	  
	private $menarquia;
	private $sixarquia;
	private $nps;
	private $citologia;
	private $descripCitologia;
	private $mamografia;
	private $descripMamografia;
	private $gestas;
	private $paras;
	private $aborto;        
	
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

	public function guardarPatologias($historiaMedica, $descripcionPatologia, $descripcionHabPsico, $descripcionAntFam){

	$this->historiaMedica = $historiaMedica;
	$this->descripcionPatologia = $descripcionPatologia;
	$this->descripcionHabPsico = $descripcionHabPsico;
	$this->descripcionAntFam = $descripcionAntFam;
	 
    return $this->datosPatologia();
}
	
	private function datosPatologia(){

		try {



			$registrar = $this->conex->prepare("INSERT INTO `antecedentespatologicos`(`codPatologia`,`descripcionPatologia`,`descripcionHabPsico`, `descripcionAntFam`,`status`, `numHistoriaMedica`) VALUES(DEFAULT,?, ?, ?, 1, ?)");

					$registrar->bindValue(1,$this->descripcionPatologia);
					$registrar->bindValue(2,$this->descripcionHabPsico);
					$registrar->bindValue(3,$this->descripcionAntFam);
					$registrar->bindValue(4,$this->historiaMedica);
					$registrar->execute();
					$registro = ['Registro Exitoso'];
					echo json_encode($registro);
						   die(); 
    	
		} catch (Exception $e) {
			return $e;
		}

}
	public function femenino($numHistoriaMedica){

		$this->numHistoriaMedica = $numHistoriaMedica;  	     
        return $this->verfemenino();
	}

	private function verfemenino(){

		$registrarPaciente = $this->conex->prepare("SELECT * FROM paciente WHERE sexoPaciente = 'Femenino' AND status = 1");
		
		$registrarPaciente->bindValue(1, $this->numHistoriaMedica);
		$registrarPaciente->execute();	

		$respuesta =  $registrarPaciente->fetchAll(\PDO::FETCH_OBJ);
    echo json_encode($respuesta);
    die();
	}

	public function obstetricia( $numHistoriaMedica, $menarquia, $sixarquia, $nps, $citologia, $descripCitologia, $mamografia, $descripMamografia, $gestas, $paras, $aborto){
			$this->numHistoriaMedica = $numHistoriaMedica;
			$this->menarquia = $menarquia;
			$this->sixarquia = $sixarquia;
			$this->nps = $nps;
			$this->citologia = $citologia;
			$this->descripCitologia = $descripCitologia;
			$this->mamografia = $mamografia;
			$this->descripMamografia = $descripMamografia;
			$this->gestas = $gestas;
			$this->paras = $paras;
			$this->aborto =$aborto;
			return $this->registroobstetricia();	
}

	private function registroobstetricia(){

		 //REGISTRO AntecedentesGineco-Obstetricos//
		try {

		$registrar = $this->conex->prepare("INSERT INTO `antecedentesgineco`(`codGineco`, `menarquia`, `sixarquia`, `nps`, `citologia`, `descripCitologia`, `mamografia`, `descripMamografia`, `gestas`, `para`, `abortos`, `status`, `numHistoriaMedica`) VALUES(DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1, ?)");
		
		$registrar->bindValue(1, $this->menarquia);
		$registrar->bindValue(2, $this->sixarquia);
		$registrar->bindValue(3, $this->nps);
		$registrar->bindValue(4, $this->citologia);
		$registrar->bindValue(5, $this->descripCitologia);
		$registrar->bindValue(6, $this->mamografia);
		$registrar->bindValue(7, $this->descripMamografia);
		$registrar->bindValue(8, $this->gestas);
		$registrar->bindValue(9, $this->para);
		$registrar->bindValue(10, $this->abortos);
		$registrar->bindValue(11, $this->numHistoriaMedica);
		$registrar->execute();
		$registrar =['Registro Exitoso'];
    	echo json_encode($registrar);
    	die();
    	
    	} catch (Exception $e) {
			return $e;
		}
	}



          public function mostrarCatalogo(){

			try{ 
		 	$registrar = $this->conex->prepare("SELECT * FROM paciente");
		 	$registrar->execute();

		 	return $registrar->fetchAll(\PDO::FETCH_OBJ);

		  	}catch(\PDOException $e){
		  		return $e;
		  	}
		 }

	}

?>