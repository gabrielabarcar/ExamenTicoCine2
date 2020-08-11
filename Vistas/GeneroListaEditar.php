<?php 
    require_once '../Vistas/include/header.php';
    require_once '../LogicaNegocio/GeneroServicios.php';
    $servicios = new GeneroServicios();
    $generos = $servicios->obtenerGenero();     
?>
    <body>
        <section>
            <center>
            <br>
            <h1>Listas Editar Genero</h1>
            <table id="t1" border="1">
                <thead>
                    <tr>
                        <th>Codigo Genero</th>
                        <th>Nombre Genero</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($generos) >0):  
                        foreach ($generos as $posicion => $genero):  ?>
                            <tr>
                                <td><?=$genero->getCod_genero(); ?></td>
                                <td><?=$genero->getNombre_genero();?></td>
                                <td><a href="../Vistas/GeneroEditar.php?cod=<?=$genero->getCod_genero();?>">Editar</a></td>
                                
                            </tr>
                <?php
                       endforeach;
                    endif;
                ?>
                </tbody>
            </table>
            </center>
        </section>                
    </body>
</html>