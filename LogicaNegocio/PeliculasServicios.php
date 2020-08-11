<?php
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/peliculas.php';

class PeliculasServicios {
    
    private $db;
    
        function __construct() {
        $this->db = new ConexionBD();
    }
    
    function agregarPelicula($registro){
        $this->db->getConeccion();
        
        $sql = "INSERT INTO peliculas(nombrepelicula,director,sinopsis,genero,puntuacion,imagenpeli) VALUES(?,?,?,?,?,?)";
        $paramType = 'ssssss';
        $paramValue = array($registro->getNombrepelicula(),$registro->getDirector(), $registro->getSinopsis(),$registro->getGenero(),$registro->getPuntuacion(),$registro->getImagenpeli());
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
    function modificarPelicula($registro) {
        $this->db->getConeccion();
        
        $sql = "UPDATE peliculas SET nombrepelicula= ?,director = ?,sinopsis = ?,genero = ?,puntuacion = ?,imagenpeli= ? WHERE codigopelicula = ?";
        $paramType = "ssssssi";
          $paramValue = array($registro->getNombrepelicula(),$registro->getDirector(), $registro->getSinopsis(),$registro->getGenero(),$registro->getPuntuacion(),$registro->getImagenpeli(),$registro->getCodigopelicula());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function eliminarPelicula($codigopelicula) {
        $this->db->getConeccion();
        $sql = "DELETE FROM peliculas WHERE codigopelicula = ?";
        $paramType = "i";
        $paramValue = array($codigopelicula);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }    
   
    function obtenerPelicula() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM peliculas ORDER BY codigopelicula";
        $registros = $this->db->executeQueryReturnData($sql);
        $peliculas =array();
        
        foreach ($registros as $posicion => $row){
            $pelicula = new peliculas($row['codigopelicula'],$row['nombrepelicula'],$row['director'],$row['sinopsis'],$row['genero'],$row['puntuacion'],$row['imagenpeli']);
            array_push($peliculas, $pelicula);
        }
        $this->db->cerrarConeccion();        
        return $peliculas;
    } 
    
    function obtenerPeliculaById($codigopelicula) {
        $this->db->getConeccion();
        $sql = "SELECT * FROM peliculas WHERE codigopelicula = $codigopelicula";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        $pelicula = new peliculas($registros[0]['codigopelicula'],$registros[0]['nombrepelicula'],$registros[0]['director'],$registros[0]['sinopsis'],$registros[0]['genero'],$registros[0]['puntuacion'],$registros[0]['imagenpeli']);
       
        return $pelicula;
    }
    
      function modificarPuntuacionPelicula($registro) {
        $this->db->getConeccion();
        
        $sql = "UPDATE peliculas SET puntuacion = ? WHERE codigopelicula = ?";
        $paramType = "si";
          $paramValue = array($registro->getPuntuacion(),$registro->getCodigopelicula());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
     function buscaPelicula($busqueda) {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM peliculas WHERE titulo LIKE '%$busqueda%'";
        $registros = $this->db->executeQueryReturnData($sql);
        $peliculas =array();
        
        foreach ($registros as $posicion => $row){
            $pelicula = new peliculas($row['id'],$row['afiche'],$row['codigo'],$row['titulo'],$row['director'],$row['sinopsis'],$row['puntuacion'],$row['genero']);
            array_push($peliculas, $pelicula);
        }
        $this->db->cerrarConeccion();        
        return $peliculas;
    }  
}