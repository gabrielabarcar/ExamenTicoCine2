<?php 
require 'include/header.php';
require '../LogicaNegocio/GeneroServicios.php';

    $servicios = new GeneroServicios();
    $generospelicula = $servicios->obtenerGenero();    
    
?>
<body>
    <section>
        <br>
        <h1>GUARDAR PELICULA</h1>
        <form method="post" action="../Controladores/peliculaController.php" enctype="multipart/form-data">		
            <input type="text" placeholder="Nombre" name="nombre" required>
            <input type="text" placeholder="Director"  name="director" required>
            <input type="text" placeholder="Sinopsis"  name="sinopsis" required>
            <label>Genero</label>
            <select name="genero">
                <?php
                    if(count($generospelicula) >0):  
                        foreach ($generospelicula as $posicion => $genero):  ?>
                
                <option value="<?=$genero->getNombre_genero();?>">
                    
                    <?=$genero->getNombre_genero();?>
                    
                </option>
                
                
                <?php
                    endforeach;
                        endif;
                ?>
            </select> 
            <input type="number" value="0" name="puntuacion" required readonly="">
            <input type="file" required="" name="imagen"/><br><br>
            <input type="submit" name="accion" value="registrar">
        </form>
    </section>
    </body>
</html>