<?php

	namespace modelo; 
    use config\connect\connectDB as connectDB;
	use \PDO;

	class historiaMedicaModelo extends connectDB{

	private $imprimir;


    public function __construct()
	{
		parent::__construct();
	}

	public function getConsulta($historiaMedica){

    if(preg_match_all("/^[0-9]{7,10}$/", $historiaMedica) == false){
      $resultado = ['resultado' => 'Error de cedula' , 'error' => 'Cédula invalida.'];
      return $resultado;
      
    }
    
	$this->imprimir=$historiaMedica;

	}

	public function consultaPaciente(){
		
		$consulta = $this->conex->prepare("SELECT * FROM paciente WHERE paciente.cedulaPaciente =".$this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}        

	}

	
	public function consultaPatologia(){
		
		$consulta = $this->conex->prepare("SELECT tp.codPatologia, tp.nombrePatologia, tp.subNombrePatologia, tp.sintomasPatologia, tp.descripcionPatologia FROM `paciente` p INNER JOIN `tipopatologia` tp ON p.numHistoriaMedica = tp.numHistoriaMedica WHERE p.cedulaPaciente =".$this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

        if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}     

	}
	
	public function consultaPatologiaFam(){
		
		$consulta = $this->conex->prepare("SELECT  paf.codPatologiaFamiliar,  paf.descripcionPatologiaFamiliar,  paf.tipoParentesco,  paf.descripcionParentesco FROM paciente p INNER JOIN patologiafamiliar paf ON p.numHistoriaMedica = paf.numHistoriaMedica WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

        if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}     

	}
	
	public function consultaPsicobiologico(){
		
		$consulta = $this->conex->prepare("SELECT habpsi.codHabitoPsicobiologico, habpsi.nombreHabitoPsicobiologico, habpsi.descripcionHabitoPsicobiologico FROM paciente p INNER JOIN habitospsicobiologicos habpsi ON p.numHistoriaMedica = habpsi.numHistoriaMedica WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

        if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}     

	}
public function consultaGinecoObstreticos(){
		
		$consulta = $this->conex->prepare("SELECT angi.codGineco, angi.menarquia, angi.sixarquia, angi.nps, angi.citologia, angi.descripCitologia, angi.mamografia, angi.descripMamografia, angi.gestas, angi.para, angi.abortos FROM paciente p INNER JOIN tipopatologia tp ON p.numHistoriaMedica = tp.numHistoriaMedica INNER JOIN antecedentesgineco angi ON tp.codPatologia = angi.codPatologia WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    
	}

public function consultaMedica(){
		
		$consulta = $this->conex->prepare("SELECT c.numConsulta, c.fechaConsulta, c.horaConsulta, c.numHistoriaMedica FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    
	}


	public function examenFuncional(){
		
		$consulta = $this->conex->prepare("SELECT efu.codExamenFuncional, efu.descripcionExamenFuncional, efu.numConsulta FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica INNER JOIN examenfuncional efu on c.numConsulta = efu.numConsulta WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    

	}
	public function ExamenFisico(){
		
		$consulta = $this->conex->prepare("SELECT `codExamenFisico`, `descripcionExamenFisico`, `signoDecubito`, `signoSedente`, `signoBidepestacion`, `frecuenciaRespiratoria`, `frecuenciaCardiaca`, `peso`, `talla`, `IMC`, `temperatura`, `presionArterial` FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica INNER JOIN examenfisico efi ON c.numConsulta = efi.numConsulta WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    

	}
	public function tipoExamen(){
		
		$consulta = $this->conex->prepare("SELECT `codTipoExamen`, `nombreTipoExamen`, `descripcionTipoExamen` FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica INNER JOIN examenfuncional efu ON c.numConsulta = efu.numConsulta INNER JOIN tipoexamen tex ON efu.codExamenFuncional = tex.codExamenFuncional WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    

	}

	public function ExamenesPrevios(){
		
		$consulta = $this->conex->prepare("SELECT `examenesprevios`INNER JOIN paciente ON paciente.numHistoriaMedica = examenesprevios.numHistoriaMedica WHERE paciente.numHistoriaMedica =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    

	}

	public function consultaDiagnostico(){
		
		$consulta = $this->conex->prepare("SELECT d.numDiagnostico, d.descripcionDiagnostico FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica INNER JOIN diagnostico d ON c.numConsulta = d.numConsulta WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    

	}

public function consultaTratamiento(){
		
		$consulta = $this->conex->prepare("SELECT t.numTratamiento, t.indicacionesTratamiento, t.medicamentosTratamiento FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica INNER JOIN diagnostico d ON c.numConsulta = d.numConsulta INNER JOIN tratamiento t ON d.numDiagnostico = t.numDiagnostico WHERE p.cedulaPaciente =". $this->imprimir.";");

            $consulta ->execute();
		
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);

		if ($data != 0) {

			return $data;
		}
		else{
			return "0";
		}    

	}
}
?> 