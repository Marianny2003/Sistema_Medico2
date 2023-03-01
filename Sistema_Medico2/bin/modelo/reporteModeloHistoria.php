<?php

	if (file_exists("config/connect/connectDB.php")) {
		require_once("config/connect/connectDB.php");
	}else{
		die("Error: No se ha encontrado la connectDB");
	}

	class ConsultaPaciente extends connectDB{

	private $cedulaBuscada;

    public function __construct()
	{
		parent::__construct();
	}

	public function BuscarDatos($historiaMedica)
	{
		$this->cedulaBuscada = $historiaMedica;
		
		return $this->consultarDatos();
	}

	private function consultarDatos(){
		
		$consultarPaciente = $this->conex->prepare("SELECT * FROM paciente INNER JOIN citapaciente ON paciente.numHistoriaMedica = citapaciente.numHistoriaMedica INNER JOIN cita ON citapaciente.codCita = cita.codCita WHERE paciente.cedulaPaciente =".$this->cedulaBuscada.";");
		$consultarPaciente ->execute();
		
        return $consultarPaciente->fetchAll(PDO::FETCH_ASSOC);
	}
}

/* 

inner JOIN antecedentefamiliar ON paciente.numHistoriaMedica = antecedentefamiliar.numHistoriaMedica INNER join patologiafamiliar ON antecedentefamiliar.codPatologiaFamiliar = patologiafamiliar.codPatologiaFamiliar INNER JOIN antecedentenopatologico ON paciente.numHistoriaMedica = antecedentenopatologico.numHistoriaMedica INNER JOIN tiponopatologia on antecedentenopatologico.codNoPatologia = tiponopatologia.codNoPatologia INNER JOIN antecedentepatologico ON paciente.numHistoriaMedica = antecedentepatologico.numHistoriaMedica INNER JOIN tipopatologia ON antecedentepatologico.codPatologia = tipopatologia.codPatologia WHERE paciente.cedulaPaciente = 112;
*/
?>