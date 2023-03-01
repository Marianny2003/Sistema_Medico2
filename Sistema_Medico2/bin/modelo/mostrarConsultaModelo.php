<?php 

	namespace modelo;
	use config\connect\connectDB as connectDB;

	class mostrarConsultaModelo extends connectDB{

		private $codExamenFisico; 
		private $descripcionExamenFisico;
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
		private $codExamenFuncional;
		private $descripcionExamenFuncional;
		private $codCardio;
		private $checkCardio;
		private $sisCardio;
		private $codRespiratorio;
		private $checkRespiratorio;
		private $sisRespiratorio;
		private $codGastro;
		private $checkGastro;
		private $sisGastro;
		private $codGenito;
		private $checkGenito;
		private $sisGenito;
		private $codOsteo;
		private $checkOsteo;
		private $sisOsteo;
		private $codNeuro;
		private $checkNeuro;
		private $sisNeuro;
		private $codEndo;
		private $checkEndo;
		private $sisEndo;


		private $codDiagnostico;
		private $descripcionDiagnostico;
		private $codTratamiento;
		private $indicacionesTratamiento;
		private $medicamentosTratamiento;


		private $numConsulta;

        public function __construct(){
            parent::__construct();
        }

        /*INFORMACION DATATABLE*/




        public function verConsultasDataTable(){ 
        	try{

        	$new = $this->conex->prepare("SELECT p.cedulaPaciente, p.nombrePaciente, p.apellidoPaciente, c.fechaConsulta, CONCAT('<button type=\"button\" id=\"', c.numConsulta ,'\" class=\"me-2 btn btn-info datos\" data-bs-toggle=\"modal\" data-bs-target=\"#datos\"><i class=\"bi bi-person-badge-fill\">Datos</i></button><button type=\"button\" id=\"', c.numConsulta ,'\" class=\"me-2 btn btn-warning examenes\" data-bs-toggle=\"modal\" data-bs-target=\"#examenes\"><i class=\"bi bi-journal-medical\">Exámenes</i></button><button type=\"button\" id=\"', c.numConsulta ,'\" class=\"me-2 btn btn-success diagnostico\" data-bs-toggle=\"modal\" data-bs-target=\"#diagnostico\"><i class=\"bi bi-receipt\">Diagnóstico</i></button><button type=\"button\" id=\"', c.numConsulta ,'\" class=\"me-2 btn btn-danger borrarC\" data-bs-toggle=\"modal\" data-bs-target=\"#borrarC\"><i class=\"bi bi-trash-fill\">Borrar</i></button>') as opciones FROM paciente p
        		INNER JOIN consulta c
        		ON p.numHistoriaMedica = c.numHistoriaMedica
        		WHERE c.status = 1;");

		    $new->execute();
		    $data = $new->fetchAll();
		    echo json_encode($data);
		    die();

		    }catch(\PDOException $e){
		    	return $e;
		    }

        }

        /*INFORMACION DE LAS CONSULTAS*/
        
        public function consultaPaciente($id){
        	try {

        		$this->id = $id;
        		$new = $this->conex->prepare("SELECT * FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica
        			WHERE c.status = 1 and c.numConsulta = ?");
        		$new->bindValue(1, $this->id);
        		$new->execute();
        		$info = $new->fetchAll(\PDO::FETCH_OBJ);
        		echo json_encode($info);
        		die();
        	} catch (\PDOException $e) {
        		return $e;
        	}
        }

        public function consultaExamenes($id1){
        	try {

        		$this->id = $id1;
  
        		$new = $this->conex->prepare("SELECT * FROM paciente p INNER JOIN consulta c ON p.numHistoriaMedica = c.numHistoriaMedica INNER JOIN examenfisico efi ON efi.numConsulta = c.numConsulta INNER JOIN examenfuncional efu ON efu.numConsulta = c.numConsulta INNER JOIN tipoexamen te ON te.codExamenFuncional = efu.codExamenFuncional
        			WHERE c.status = 1 and c.numConsulta = ?");
        		$new->bindValue(1, $this->id);
        		$new->execute();
        		$info = $new->fetchAll(\PDO::FETCH_OBJ);
        		echo json_encode($info);
        		die();
        	} catch (\PDOException $e) {
        		return $e;
        	}
        }


        public function consultaDiagnostico($id2){
        	try {

        		$this->id = $id2;
  
        		$new = $this->conex->prepare("SELECT * FROM paciente p INNER JOIN consulta c ON c.numHistoriaMedica = p.numHistoriaMedica INNER JOIN diagnostico d ON d.numConsulta = c.numConsulta INNER JOIN tratamiento t ON t.numDiagnostico = d.numDiagnostico
        			WHERE c.status = 1 and c.numConsulta = ?");
        		$new->bindValue(1, $this->id);
        		$new->execute();
        		$info = $new->fetchAll(\PDO::FETCH_OBJ);
        		echo json_encode($info);
        		die();
        	} catch (\PDOException $e) {
        		return $e;
        	}
        }

        /*EDICION DE LAS CONSULTAS*/


        public function infoExamenes($codExamenFisico, $descripcionExamenFisico, $sigSedente, $sigDecubito, $sigBidepestacion, $talla, $peso, $IMC, $frecuRespiratoria, $frecuCardiaca, $temperatura, $preArterial, $codExamenFuncional, $descripcionExamenFuncional, $codCardio, $checkCardio, $sisCardio, $codRespiratorio, $checkRespiratorio, $sisRespiratorio, $codGastro, $checkGastro, $sisGastro, $codGenito, $checkGenito, $sisGenito, $codOsteo, $checkOsteo, $sisOsteo, $codNeuro, $checkNeuro, $sisNeuro, $codEndo, $checkEndo, $sisEndo, $id1){

        	$this->codExamenFisico = $codExamenFisico;
        	$this->descripcionExamenFisico = $descripcionExamenFisico;
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
        	$this->codExamenFuncional = $codExamenFuncional;
        	$this->descripcionExamenFuncional = $descripcionExamenFuncional;
        	$this->codCardio = $codCardio;
        	$this->checkCardio = $checkCardio;
        	$this->sisCardio = $sisCardio;
        	$this->codRespiratorio = $codRespiratorio;
        	$this->checkRespiratorio = $checkRespiratorio;
        	$this->sisRespiratorio = $sisRespiratorio;
        	$this->codGastro = $codGastro;
        	$this->checkGastro = $checkGastro;
        	$this->sisGastro = $sisGastro;
        	$this->codGenito = $codGenito;
        	$this->checkGenito = $checkGenito;
        	$this->sisGenito = $sisGenito;
        	$this->codOsteo = $codOsteo;
        	$this->checkOsteo = $checkOsteo;
        	$this->sisOsteo = $sisOsteo;
        	$this->codNeuro = $codNeuro;
        	$this->checkNeuro = $checkNeuro;
        	$this->sisNeuro = $sisNeuro;
        	$this->codEndo = $codEndo;
        	$this->checkEndo = $checkEndo;
        	$this->sisEndo = $sisEndo;
        	$this->numConsulta = $id1;
        	
        	return $this->editarExamenes();

        }

        private function editarExamenes(){

        	try{

        		$new = $this->conex->prepare("UPDATE `examenfisico` SET `descripcionExamenFisico` = ?, `signoDecubito` = ?, `signoSedente` = ?, `signoBidepestacion` = ?, `frecuenciaRespiratoria` = ?, `frecuenciaCardiaca` = ?, `peso` = ?, `talla` = ?, `IMC` = ?, `temperatura` = ?, `presionArterial` = ?, `numConsulta` = ? WHERE `codExamenFisico` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->descripcionExamenFisico);
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
        		$new->bindValue(12, $this->numConsulta);
        		$new->bindValue(13, $this->codExamenFisico);
        		$new->execute();

        		$new = $this->conex->prepare("UPDATE `examenfuncional` SET `descripcionExamenFuncional` = ?, `numConsulta` = ? WHERE `codExamenFuncional` = ? AND `status` = 1");

        		$new->bindValue(1, $this->descripcionExamenFuncional);
        		$new->bindValue(2, $this->numConsulta);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->execute();


        		/*Sistema Cardiovascular*/

        		$new = $this->conex->prepare("UPDATE `tipoexamen` SET `nombreTipoExamen` = ?, `descripcionTipoExamen` = ?, `codExamenFuncional` = ? WHERE `codTipoExamen` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->checkCardio);
        		$new->bindValue(2, $this->sisCardio);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->bindValue(4, $this->codCardio);
        		$new->execute();

        		/*Sistema Respiratorio*/

        		$new = $this->conex->prepare("UPDATE `tipoexamen` SET `nombreTipoExamen` = ?, `descripcionTipoExamen` = ?, `codExamenFuncional` = ? WHERE `codTipoExamen` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->checkRespiratorio);
        		$new->bindValue(2, $this->sisRespiratorio);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->bindValue(4, $this->codRespiratorio);
        		$new->execute();

        		/*Sistema Gastrointestinal*/

        		$new = $this->conex->prepare("UPDATE `tipoexamen` SET `nombreTipoExamen` = ?, `descripcionTipoExamen` = ?, `codExamenFuncional` = ? WHERE `codTipoExamen` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->checkGastro);
        		$new->bindValue(2, $this->sisGastro);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->bindValue(4, $this->codGastro);
        		$new->execute();

        		/*Sistema Genitourinario*/

        		$new = $this->conex->prepare("UPDATE `tipoexamen` SET `nombreTipoExamen` = ?, `descripcionTipoExamen` = ?, `codExamenFuncional` = ? WHERE `codTipoExamen` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->checkGenito);
        		$new->bindValue(2, $this->sisGenito);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->bindValue(4, $this->codGenito);
        		$new->execute();

        		/*Sistema Osteomuscular*/

        		$new = $this->conex->prepare("UPDATE `tipoexamen` SET `nombreTipoExamen` = ?, `descripcionTipoExamen` = ?, `codExamenFuncional` = ? WHERE `codTipoExamen` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->checkOsteo);
        		$new->bindValue(2, $this->sisOsteo);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->bindValue(4, $this->codOsteo);
        		$new->execute();

        		/*Sistema Neurologico*/

        		$new = $this->conex->prepare("UPDATE `tipoexamen` SET `nombreTipoExamen` = ?, `descripcionTipoExamen` = ?, `codExamenFuncional` = ? WHERE `codTipoExamen` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->checkNeuro);
        		$new->bindValue(2, $this->sisNeuro);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->bindValue(4, $this->codNeuro);
        		$new->execute();

        		/*Sistema Endocrino-Metabolico*/

        		$new = $this->conex->prepare("UPDATE `tipoexamen` SET `nombreTipoExamen` = ?, `descripcionTipoExamen` = ?, `codExamenFuncional` = ? WHERE `codTipoExamen` = ? AND `status` = 1 ");

        		$new->bindValue(1, $this->checkEndo);
        		$new->bindValue(2, $this->sisEndo);
        		$new->bindValue(3, $this->codExamenFuncional);
        		$new->bindValue(4, $this->codEndo);
        		$new->execute();


        		$editar = ['Examenes Editado con Exito'];
        		echo json_encode($editar);
        		die();
        	} catch (\PDOException $error) {
        		return $error;
        	}
        }


        public function infoDiagnostico($codDiagnostico, $diagnostico, $codTratamiento, $tratamiento, $indicaciones, $id2){

        	$this->codDiagnostico = $codDiagnostico;
        	$this->descripcionDiagnostico = $diagnostico;
        	$this->codTratamiento = $codTratamiento;
        	$this->medicamentosTratamiento = $tratamiento;
        	$this->indicacionesTratamiento = $indicaciones;
        	$this->numConsulta = $id2;


        	return $this->editarDiagnostico();
        }


        private function editarDiagnostico(){
        	try {
        		
        		$new = $this->conex->prepare("UPDATE `diagnostico` SET `descripcionDiagnostico` = ?, `numConsulta` = ? WHERE `numDiagnostico` = ? AND `status` = 1");

        		$new->bindValue(1, $this->descripcionDiagnostico);
        		$new->bindValue(2, $this->numConsulta);
        		$new->bindValue(3, $this->codDiagnostico);
        		$new->execute();

        		$new = $this->conex->prepare("UPDATE `tratamiento` SET `indicacionesTratamiento` = ?, `medicamentosTratamiento` = ?, `numDiagnostico` = ? WHERE `numTratamiento` = ? AND `status` = 1");

        		$new->bindValue(1, $this->indicacionesTratamiento);
        		$new->bindValue(2, $this->medicamentosTratamiento);
        		$new->bindValue(3, $this->codDiagnostico);
        		$new->bindValue(4, $this->codTratamiento);
        		$new->execute();


        		$editar = ['Diagnostico' => 'Editado con Exito'];
        		echo json_encode($editar);
        		die();

        	} catch (\PDOException $error) {
        		return $error;
        	}
        }

        public function eliminarConsulta($idb){
        	try {

        		$this->id = $idb;
        		$new = $this->conex->prepare("UPDATE `consulta` SET `status` = 0 WHERE `numConsulta` = ?");
        		$new->bindValue(1, $this->id);
        		$new->execute();
        		$data = $new->fetchAll(\PDO::FETCH_OBJ);
        		echo json_encode($data);
        		
        	} catch (\PDOException $error) {
        		return $error;
        	}
        }





    }




?>