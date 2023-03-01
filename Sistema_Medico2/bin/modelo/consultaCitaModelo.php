<?php

   namespace modelo;
   use config\connect\connectDB as connectDB;
   use modelo\reporteModelo as reporte;

    class consultaCitaModelo extends connectDB{

    
    private $cedulaPaciente; 
    private $nombrePaciente;
    private $apellidoPaciente;
    private $correoPaciente;
    private $telefonoPaciente; 
    private $fechaCita;
    private $horaCita;
    private $motivoCita; 
 
    
    private $numHistoriaMedica;
    private $idCita;


    public function __construct(){
        parent::__construct();
    }
                //INFORMACION CITAS/

       public function mostrarCita($idDatos){
            try {

                $this->idDatos = $idDatos;
                $date = $this->conex->prepare("SELECT * FROM cita INNER JOIN paciente ON paciente.numHistoriaMedica = cita.numHistoriaMedica WHERE cita.status = 1 and cita.codCita = ?");
               
                $date->bindValue(1, $this->idDatos);
                $date->execute();
                $info = $date->fetchAll(\PDO::FETCH_OBJ);
                echo json_encode($info);
                die();
            } catch (\PDOException $e) {
                return $e;
            }
        }
 

                                /*INFORMACION DATATABLE*/


        public function verCitaDataTable(){ 
            try{

            $new = $this->conex->prepare("SELECT c.fechaCita, c.horaCita, p.cedulaPaciente, p.nombrePaciente, p.apellidoPaciente, CONCAT('<button type=\"button\" id=\"', c.codCita  ,'\" class=\"me-2 btn btn-primary infomodal\" data-bs-toggle=\"modal\" data-bs-target=\"#infomodal\"><i class=\"bi bi-eye-fill\"></i></button><button type=\"button\" id=\"', c.codCita  ,'\" class=\"me-2 btn btn-warning editar\" data-bs-toggle=\"modal\" data-bs-target=\"#editar\"><i class=\"bi bi-pencil-square\"></i></button><button type=\"button\" id=\"', c.codCita  ,'\" class=\"me-2 btn btn-danger borrarCita\" data-bs-toggle=\"modal\" data-bs-target=\"#borrarCita\"><i class=\"bi bi-trash3\"></i></button><button type=\"button\" id=\"', c.codCita  ,'\" class=\"me-2 btn btn-success reporteCita\" data-bs-toggle=\"modal\" data-bs-target=\"#reporteCita\"><i class=\"bi bi-receipt\"></i></button>') as opciones FROM paciente p
                INNER JOIN cita c
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


               //EDITAR CITAAAAA//

        public function verCita($idCita){
            try {

                $this->idCita = $idCita;
                $date = $this->conex->prepare("SELECT * FROM cita c INNER JOIN paciente p ON p.numHistoriaMedica = c.numHistoriaMedica
                 WHERE c.status = 1 and c.codCita = ?");
               
                $date->bindValue(1, $this->idCita);
                $date->execute();
                $info = $date->fetchAll(\PDO::FETCH_OBJ);
                echo json_encode($info);
                die();
            } catch (\PDOException $e) {
                return $e;
            }
        }

   public function datosCita($cedulaPaciente, $nombrePaciente, $apellidoPaciente, $correoPaciente, $telefonoPaciente, $fechaCita, $horaCita, $motivoCita, $numHistoriaMedica, $idCita){

            $this->cedulaPaciente = $cedulaPaciente;
            $this->nombrePaciente = $nombrePaciente;
            $this->apellidoPaciente = $apellidoPaciente;
            $this->correoPaciente = $correoPaciente;
            $this->telefonoPaciente = $telefonoPaciente;
            $this->fechaCita = $fechaCita;
            $this->horaCita = $horaCita;
            $this->motivoCita = $motivoCita;
            $this->numHistoriaMedica = $numHistoriaMedica;
            $this->idCita = $idCita;


            return $this->editarCita();
        }


        private function editarCita(){
            try {
                
                $date = $this->conex->prepare("UPDATE `paciente` SET `cedulaPaciente` = ?, `nombrePaciente` = ?, `apellidoPaciente` = ?, `correoPaciente` = ?, `telefonoPaciente` = ? WHERE `numHistoriaMedica` = ? AND `status` = 1");

                $date->bindValue(1, $this->cedulaPaciente);
                $date->bindValue(2, $this->nombrePaciente);
                $date->bindValue(3, $this->apellidoPaciente);
                $date->bindValue(4, $this->correoPaciente);
                $date->bindValue(5, $this->telefonoPaciente);
                $date->bindValue(6, $this->numHistoriaMedica);
                $date->execute();

                $date = $this->conex->prepare("UPDATE `cita` SET `fechaCita` = ?, `horaCita` = ?, `motivoCita` = ?, `numHistoriaMedica` = ? WHERE `codCita` = ? AND `status` = 1");

                $date->bindValue(1, $this->fechaCita);
                $date->bindValue(2, $this->horaCita);
                $date->bindValue(3, $this->motivoCita);
                $date->bindValue(4, $this->numHistoriaMedica);
                $date->bindValue(5, $this->idCita);
                $date->execute();


                $editar = ['Actualización Exitosa'];
                echo json_encode($editar);
                die();

            } catch (\PDOException $error) {
                return $error;
            }
        }
      
                               //ELIMINAR CITA//

        public function eliminarCita($idBorrar){
            try {

                $this->id = $idBorrar;
                $eliminar = $this->conex->prepare("UPDATE `cita` SET `status` = 0 WHERE `codCita` = ?");
                $eliminar->bindValue(1, $this->id);
                $eliminar->execute();
                $data = $eliminar->fetchAll(\PDO::FETCH_OBJ);
                echo json_encode($data);
                
            } catch (\PDOException $error) {
                return $error;
            }
        }

        //REPOTEEE CITA//

            public function citaReporte($idReporte){
            try {

                $this->idReporte = $idReporte;
                $date = $this->conex->prepare("SELECT * FROM cita c INNER JOIN paciente p ON p.numHistoriaMedica = c.numHistoriaMedica
                 WHERE c.status = 1 and c.codCita = ?");
               
                $date->bindValue(1, $this->idReporte);
                $date->execute();
                $info = $date->fetchAll(\PDO::FETCH_ASSOC);
                ob_start();
                $reporte=new reporte;
                $date->AddPage();
                $date->FancyTable($info);
                $pdf = 'assets/pdf';
                $date->Output('F',$pdf);
                ob_end_flush();
                $info = ['info' => 'FPDF guardado', 'ruta' => $pdf];
                echo json_encode($info);
                die();
            } catch (\PDOException $e) {
                return $e;
            }
        }




    }

?>
