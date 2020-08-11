<?php

class generos {
    
 
    private $cod_genero;
    private $nombre_genero;
    
    function __construct($cod_genero, $nombre_genero) {
        $this->cod_genero = $cod_genero;
        $this->nombre_genero = $nombre_genero;
    }


    function getCod_genero() {
        return $this->cod_genero;
    }

    function getNombre_genero() {
        return $this->nombre_genero;
    }

    function setCod_genero($cod_genero) {
        $this->cod_genero = $cod_genero;
    }

    function setNombre_genero($nombre_genero) {
        $this->nombre_genero = $nombre_genero;
    } 
}