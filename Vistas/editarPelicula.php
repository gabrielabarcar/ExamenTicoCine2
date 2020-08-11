<?php 
  require 'include/header.php';
  require dirname(__DIR__).'/LogicaNegocio/PeliculasServicios.php';
  
  if(isset($_GET['cod'])){
      $codigopelicula  = $_GET['cod'];
      $servicios = new PeliculasServicios();
      $pelicula = $servicios->obtenerPeliculaById($codigopelicula);
    }
?>
    <body>
    <section>
        <br>
        <h3>Editar</h3>
    <form method="post" action="../Controladores/peliculaController.php" enctype="multipart/form-data">
        <table id="t1" border="1">
            <thead>
                
                <tr>
                       <th>Código</th>
                        <th>Nombre</th>
                        <th>Director</th>
                        <th>Sinopsis</th>
                        <th>Puntuación</th>
                        <th>Genero</th>
                        <th>Imagen</th>            
                        <th></th>
                </tr>

            </thead>
            
            <tbody>
  
                <tr>      
                    <td><input type="text" placeholder="Código" name="codigopelicula" required value="<?=$pelicula->getCodigopelicula();?>" readonly=""></td>     
                 <td><input type="text" placeholder="Nombre" name="nombre" required value="<?=$pelicula->getNombrepelicula();?>"></td> 
                <td><input type="text" placeholder="Director"  name="director" required value="<?=$pelicula->getDirector();?>"> </td>  
                <td><input type="text" placeholder="Sinopsis"  name="sinopsis" required value="<?=$pelicula->getSinopsis();?>"></td> 
                <td>
                <label>Genero</label>
                <select name="genero">
                    <option value="Accion">Accion</option>
                    <option value="Romantica">Romantica</option>
                    <option value="Terror">Terror</option>
                </select>
                </td>
                 <td><input type="number" placeholder="Puntuacion"  name="puntuacion" required value="<?=$pelicula->getPuntuacion();?>"></td>
                <td><input type="file" required="" name="imagen"/></td>   
                <td><input type="submit" name="accion" value="actualizar"></td>
                </tr>

            </tbody>
        </table>
    </form>
</section>
    </body>
</html>