<?php

class peliculas {
    
    private $codigopelicula;
    private $nombrepelicula;
    private $director;
    private $sinopsis;
    private $genero;
    private $puntuacion;
    private $imagenpeli;
    
    function __construct($codigopelicula, $nombrepelicula, $director, $sinopsis, $genero, $puntuacion, $imagenpeli) {
        $this->codigopelicula = $codigopelicula;
        $this->nombrepelicula = $nombrepelicula;
        $this->director = $director;
        $this->sinopsis = $sinopsis;
        $this->genero = $genero;
        $this->puntuacion = $puntuacion;
        $this->imagenpeli = $imagenpeli;
    }

    function getCodigopelicula() {
        return $this->codigopelicula;
    }

    function getNombrepelicula() {
        return $this->nombrepelicula;
    }

    function getDirector() {
        return $this->director;
    }

    function getSinopsis() {
        return $this->sinopsis;
    }

    function getGenero() {
        return $this->genero;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function getImagenpeli() {
        return $this->imagenpeli;
    }

    function setCodigopelicula($codigopelicula) {
        $this->codigopelicula = $codigopelicula;
    }

    function setNombrepelicula($nombrepelicula) {
        $this->nombrepelicula = $nombrepelicula;
    }

    function setDirector($director) {
        $this->director = $director;
    }

    function setSinopsis($sipnosis) {
        $this->sinopsis = $sipnosis;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

    function setImagenpeli($imagenpeli) {
        $this->imagenpeli = $imagenpeli;
    } 
}