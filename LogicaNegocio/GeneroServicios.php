<?php
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/generos.php';

class GeneroServicios {
    
    private $db;
    function __construct() {
    $this->db = new ConexionBD();
    }
    
    function agregarGenero($registro){
        $this->db->getConeccion();
        
        $sql = "INSERT INTO genero(nombre_genero) VALUES(?)";
        $paramType = 's';
        $paramValue = array($registro->getNombre_genero());
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion(); 
    }
    
        function modificarGenero($registro) {
        $this->db->getConeccion();
        
        $sql = "UPDATE genero SET nombre_genero=? WHERE cod_genero = ?";
        $paramType = "si";
        $paramValue = array($registro->getNombre_genero(),$registro->getCod_genero());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function obtenerGenero() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM genero ORDER BY cod_genero";
        $registros = $this->db->executeQueryReturnData($sql);
        $generospeliculas = array();
        
        foreach ($registros as $posicion => $row){
            $genero = new generos($row['cod_genero'],$row['nombre_genero']);
            array_push($generospeliculas, $genero);
        }
        $this->db->cerrarConeccion();        
        return $generospeliculas;
    }
    
     function obtenerGeneroByCodigo($cod) {
        $this->db->getConeccion();
        $sql = "SELECT * FROM genero WHERE cod_genero = $cod";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        $genero = new generos($registros[0]['cod_genero'],$registros[0]['nombre_genero']);
       
        return $genero;
    }  
}