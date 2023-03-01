<?php

	namespace modelo;
	use config\connect\connectDB as connectDB;

	class mostrarCatalogoModelo extends connectDB{

         private $cedulaPaciente; 
         private $nombrePaciente;
         private $apellidoPaciente;
         private $descripcionPatologia;
         private $descripcionHabPsico; 
         private $descripcionAntFam;
        


        public function __construct(){
            parent::__construct();
        }

         /*INFORMACION DATATABLE*/


        public function verCatalagoDataTable(){ 
            try{

            $new = $this->conex->prepare("SELECT p.cedulaPaciente, p.nombrePaciente, p.apellidoPaciente, CONCAT('<button type=\"button\" id=\"', a.codPatologia  ,'\" class=\"me-2 btn btn-primary infomodal\" data-bs-toggle=\"modal\" data-bs-target=\"#infomodal\"><i class=\"bi bi-eye-fill\"></i></button><button type=\"button\" id=\"', a.codPatologia  ,'\" class=\"me-2 btn btn-warning editar\" data-bs-toggle=\"modal\" data-bs-target=\"#editar\"><i class=\"bi bi-pencil-square\"></i></button><button type=\"button\" id=\"', a.codPatologia  ,'\" class=\"me-2 btn btn-danger borrarCita\" data-bs-toggle=\"modal\" data-bs-target=\"#borrarCita\"><i class=\"bi bi-trash3\"></i></button><button type=\"button\" id=\"', a.codPatologia  ,'\" class=\"me-2 btn btn-success reporte\" data-bs-toggle=\"modal\" data-bs-target=\"#reporte\"><i class=\"bi bi-receipt\"></i></button>') as opciones FROM paciente p
                INNER JOIN antecedentespatologicos a
                ON p.numHistoriaMedica = a.numHistoriaMedica
                WHERE a.status = 1;");

            $new->execute();
            $data = $new->fetchAll();
            echo json_encode($data);
            die();

            }catch(\PDOException $e){
                return $e;
            }

        }


         public function mostrarCatalago($idDatos){
            try {

                $this->idDatos = $idDatos;
                $date = $this->conex->prepare("SELECT * FROM antecedentespatologicos INNER JOIN paciente ON paciente.numHistoriaMedica = antecedentespatologicos.numHistoriaMedica WHERE antecedentespatologicos.status = 1 and antecedentespatologicos.codPatologia  = ?");
               
                $date->bindValue(1, $this->idDatos);
                $date->execute();
                $info = $date->fetchAll(\PDO::FETCH_OBJ);
                echo json_encode($info);
                die();
            } catch (\PDOException $e) {
                return $e;
            }

        }



    }

?>