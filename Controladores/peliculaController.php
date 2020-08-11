<?php   
   require dirname(__DIR__).'/LogicaNegocio/PeliculasServicios.php';

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            PeliculaAlmacenar();
       
            break;  
        case 'actualizar':
            actualizarPelicula();
 
            break;  
        case 'votar':
            puntuacion();

            break;
    }
  }

  
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarPelicula();            
            break; 
    }
  }  

  header("location:../index.php");
  function PeliculaAlmacenar(){
     
      $nombre = $_POST['nombre'];
      $director = $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $genero = $_POST['genero'];
      $puntuacion = $_POST['puntuacion'];
      $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
      
      $registro = new peliculas(0,$nombre,$director,$sinopsis,$genero,$puntuacion,$imagen);
      
      $servicios = new PeliculasServicios();
      $servicios->agregarPelicula($registro);
  }
  
  function eliminarPelicula(){
      $codigopelicula = $_GET['cod'];
       
      $servicios = new PeliculasServicios();
      $servicios->eliminarPelicula($codigopelicula);
  }

  function actualizarPelicula(){
      
      $codigopelicula = $_POST['codigopelicula'];
      $nombre = $_POST['nombre'];
      $director = $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $genero = $_POST['genero'];
      $puntuacion = $_POST['puntuacion'];
      $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
      
      $registro = new peliculas($codigopelicula,$nombre,$director,$sinopsis,$genero,$puntuacion,$imagen);
      
      $servicios = new PeliculasServicios();
      $servicios->modificarPelicula($registro);
  }  
  
  function puntuacion(){

      $codigopelicula = $_POST['codigo'];
      $puntos = $_POST['puntuacion'];
      $voto = $_POST['votar'];
      
      $total= $puntos+$voto;
      
      $registro = new peliculas($codigopelicula,'','','','',$total,'');
      
      $servicios = new PeliculasServicios();
      $servicios->modificarPuntuacionPelicula($registro);   
  }