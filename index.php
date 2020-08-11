<?php   require_once './Vistas/include/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Cine</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center>      
            <h3>MANTENIMIENTO DE PELICULAS</h3>
            <nav>
                <ul>
                    <li><a href="Vistas/PeliculaGuardar.php">Película Guardar</a></li>
                    <li><a href="Vistas/PeliculaEditar.php">Pelicula Editar</a></li>
                    <li><a href="Vistas/PeliculaBorrar.php">Peliculas Eliminar</a></li>
                </ul>
            </nav>
            <h3>MANTENIMIENTO DE GENEROS</h3>
            <nav>
                <ul>
                    <li><a href="Vistas/GeneroGuardar.php">Genero Guardar</a></li>
                    <li><a href="Vistas/GeneroListaEditar.php">Genero Editar</a></li>
                    <li><a href="Vistas/GeneroLista.php">Genero Lista</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <li><a href="Vistas/cerrarSesion.php">Salir</a></li>                    
                </ul>
            </nav>
        </center> 
    </body>
</html>