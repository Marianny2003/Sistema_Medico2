<?php

      namespace modelo;
      use config\connect\connectDB as connectDB;

  class citaModelo extends connectDB{

    private $cedulaPaciente; 
    private $nombrePaciente;
    private $apellidoPaciente;
    private $correoPaciente;
    private $telefonoPaciente;    
    private $fechaCita;
    private $horaCita;
    private $motivoCita;  
  
    public function __construct(){
    parent::__construct();
  }

  public function guardarCita($cedula, $nombre, $apellido, $correo, $telefono, $fecha, $hora, $motivo){

       
        if(preg_match_all("[!#-'*+\\-\\/0-9=?A-Z\\^-~]", $motivo)){
          return "Error Solo Caracteres";
        }

         if(preg_match_all("[!#-'*+\\-\\/0-9=?A-Z\\^-~]", $cedula)){
          return "Error Solo Caracteres";
        }

        if(preg_match_all("[!#-'*+\\-\\/0-9=?A-Z\\^-~]", $nombre)){
          return "Error Solo Caracteres";
        }

        if(preg_match_all("[!#-'*+\\-\\/0-9=?A-Z\\^-~]", $apellido)){
          return "Error Solo Caracteres";
        }


        if(preg_match_all("[!#-'*+\\-\\/0-9=?A-Z\\^-~]", $telefono)){
          return "Error Ingresando Telefono";
        }

  
            $this->cedulaPaciente = $cedula;
            $this->nombrePaciente = $nombre;
            $this->apellidoPaciente = $apellido;
            $this->correoPaciente = $correo;
            $this->telefonoPaciente = $telefono;
            $this->fechaCita = $fecha;
            $this->horaCita = $hora;
            $this->motivoCita = $motivo;
        
            return $this->datosCita(); 
  }

  private function datosCita(){

    //DATOS PACIENTE//

    $registrar = $this->conex->prepare("INSERT INTO `paciente`(`numHistoriaMedica`, `cedulaPaciente`, `nombrePaciente`, `apellidoPaciente`,  `correoPaciente`, `telefonoPaciente`, `status`) VALUES(DEFAULT, ?, ?, ?, ?, ?, 1)");
    
    $registrar->bindValue(1, $this->cedulaPaciente);
    $registrar->bindValue(2, $this->nombrePaciente);
    $registrar->bindValue(3, $this->apellidoPaciente);
    $registrar->bindValue(4, $this->correoPaciente);
    $registrar->bindValue(5, $this->telefonoPaciente);
    $registrar->execute();  
    $pacienteID = $this->conex->lastInsertId();

    //DATOS CITA//

    $registrar = $this->conex->prepare("INSERT INTO `cita`(`codCita`,`fechaCita`, `horaCita`, `motivoCita`, `status`, `numHistoriaMedica`) VALUES(DEFAULT, ?, ?, ?, 1, ?)");
    
    $registrar->bindValue(1, $this->fechaCita);
    $registrar->bindValue(2, $this->horaCita);
    $registrar->bindValue(3, $this->motivoCita);
    $registrar->bindValue(4,$pacienteID);
    $registrar->execute(); 
    $registroCita =['Registro Exitoso'];
    echo json_encode($registroCita);
    die();
    }

  public function consultarDatosCita(){
      try{ 
      $registrar = $this->conex->prepare("SELECT * FROM cita");
      $registrar->execute();

      return $registrar->fetchAll(\PDO::FETCH_OBJ);

        }catch(\PDOException $e){
          return $e;
        }
     }

 }
?>
  
