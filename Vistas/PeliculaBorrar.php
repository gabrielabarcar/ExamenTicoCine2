<?php 

    require_once '../LogicaNegocio/PeliculasServicios.php';
    $servicios = new PeliculasServicios();
    $peliculas = $servicios->obtenerPelicula();     
?>
    <body>

        <section>
            <br>
            <h1>Editar Peliculas</h1>
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
                                <td><a href="../Controladores/peliculaController.php?accion=eliminar&cod=<?=$pelicula->getCodigopelicula();?>">Eliminar</a></td>
                                
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