<?php

require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/User.php';

class UserServicios {
    
    private $db;  
    
    function __construct() {
        $this->db = new ConexionBD();
    }

     //Buscar usuario por correo y password
    function buscarUser($correo,$password){
        $this->db->getConeccion();
        $sql = "SELECT * FROM USUARIOS WHERE CORREO='$correo' AND CONTRASENA='$password'";
        $registros = $this->db->executeQueryReturnData($sql);        
        $this->db->cerrarConeccion();      
        if($registros != null){
           $usuario = new User($registros[0]['nombre'],$registros[0]['cedula'],$registros[0]['telefono'],$registros[0]['correo'],$registros[0]['password']);
        }
       return $usuario;
    }        
}