<?php 
    require_once '../LogicaNegocio/PeliculasServicios.php';
    $servicios = new PeliculasServicios();
    $peliculas = $servicios->obtenerPelicula();     
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Cine</title>
    </head>
    <body>
        <section>
            <br>
            <h1>INGRESO</h1>
            <form method="post" action="../Controladores/UserController.php">		
                    <input type="text" placeholder="Correo" name="correo" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" name="accion" value="Ingresar">
            </form>
        </section> 
        
    <section>
            <br>
            <h1>Lista de Peliculas</h1>
            
            
            <table id="t1" border="1">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Director</th>
                        <th>Sinopsis</th>
                        <th>Genero</th>
                        <th>Puntuación</th>
                        <th>Imagen</th>
                        <th>Votar</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($peliculas) >0):  
                        foreach ($peliculas as $posicion => $pelicula):  ?>
                            <tr>
                                <td><?=$pelicula->getCodigopelicula();?></td>
                                <td><?=$pelicula->getNombrepelicula();?></td>
                                <td><?=$pelicula->getDirector();?></td>
                                <td><?=$pelicula->getSinopsis();?></td>
                                <td><?=$pelicula->getGenero();?></td>
                                <td><?=$pelicula->getPuntuacion();?></td>
                                <td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($pelicula->getImagenpeli());?>"/></td>
                                <td><a href="Puntuacion.php?cod=<?=$pelicula->getCodigopelicula();?>&punto=<?=$pelicula->getPuntuacion()?>">Votar</a></td>
                
                            </tr>
                <?php
                       endforeach;
                    endif;
                ?>
                </tbody>
            </table>
        </section>  
        
    </body>
</html>