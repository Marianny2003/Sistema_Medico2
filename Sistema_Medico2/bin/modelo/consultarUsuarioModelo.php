<?php

	namespace modelo;
	use config\connect\connectDB as connectDB;

	class consultarUsuarioModelo extends connectDB{
        
        
		private $nombreApellido; 
		private $correo;
		private $nombreUser;
		private $password;
		private $idUsuario;

    public function __construct()
	{
		parent::__construct();
	}


     //Botones del Usuario

	 public function verUsuarioDataTable(){ 
            try{

            $new = $this->conex->prepare("SELECT u.nombreApellido, u.correo, u.nombreUser, CONCAT('<button type=\"button\" id=\"', u.codUser   ,'\" class=\"me-2 btn btn-primary infomodal\" data-bs-toggle=\"modal\" data-bs-target=\"#infomodal\"><i class=\"bi bi-eye-fill\"></i></button><button type=\"button\" id=\"', u.codUser  ,'\" class=\"me-2 btn btn-warning editar\" data-bs-toggle=\"modal\" data-bs-target=\"#editar\"><i class=\"bi bi-pencil-square\"></i></button><button type=\"button\" id=\"', u.codUser   ,'\" class=\"me-2 btn btn-danger borrarUsuario\" data-bs-toggle=\"modal\" data-bs-target=\"#borrarUsuario\"><i class=\"bi bi-trash3\"></i></button>') as opciones FROM usuario u WHERE u.status = 1;");

            $new->execute();
            $data = $new->fetchAll();
            echo json_encode($data);
            die();

            }catch(\PDOException $e){
                return $e;
            }

        }

	 //Ver Informacion del Usuario

	public function mostrarUsuario($idDatos){
            try {
              
              $this->idDatos = $idDatos;
              $date = $this->conex->prepare("SELECT * FROM `usuario` WHERE `status` = 1 and usuario.codUser = ?");
               
                $date->bindValue(1, $this->idDatos);
                $date->execute();
                $info = $date->fetchAll(\PDO::FETCH_OBJ);
                echo json_encode($info);
                die();
            } catch (\PDOException $e) {
                return $e;
            }
        }

         //EDITAR Usuario//

        public function verUsuario($idUsuario){
            try {

             $this->idUsuario = $idUsuario;
             $date = $this->conex->prepare("SELECT * FROM `usuario` WHERE `status` = 1 and usuario.codUser = ?");
               
                $date->bindValue(1, $this->idUsuario);
                $date->execute();
                $info = $date->fetchAll(\PDO::FETCH_OBJ);
                echo json_encode($info);
                die();
            } catch (\PDOException $e) {
                return $e;
            }
        }

   public function datosUsuario($nombreApellido, $correo, $nombreUser, $password, $idUsuario){

            $this->nombreApellido = $nombreApellido;
            $this->correo = $correo;
            $this->nombreUser = $nombreUser;
            $this->password = $password;
            $this->idUsuario = $idUsuario;

            return $this->editarUsuario();
        }


        private function editarUsuario(){
            try {
                
                $date = $this->conex->prepare("UPDATE `usuario` SET `nombreApellido` = ?,`correo` = ?, `nombreUser` = ?,`password` = ? WHERE `codUser` = ? AND `status` = 1");

                $date->bindValue(1, $this->nombreApellido);
                $date->bindValue(2, $this->correo);
                $date->bindValue(3, $this->nombreUser);
                $date->bindValue(4, $this->password);
                $date->bindValue(5, $this->idUsuario);
                $date->execute();

                $editar = ['Actualización Exitosa'];
                echo json_encode($editar);
                die();

            } catch (\PDOException $error) {
                return $error;
            }
        }


     //ELIMINAR USUARIO//

        public function eliminarUsuario($idBorrar){
            try {

                $this->id = $idBorrar;
                $eliminar = $this->conex->prepare("UPDATE `usuario` SET `status` = 0 WHERE `codUser` = ?");
                $eliminar->bindValue(1, $this->id);
                $eliminar->execute();
                $data = $eliminar->fetchAll(\PDO::FETCH_OBJ);
                echo json_encode($data);
                
            } catch (\PDOException $error) {
                return $error;
            }
        }


}
?>