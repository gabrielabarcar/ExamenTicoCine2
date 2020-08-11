<?php 
require 'include/header.php';
?>
    <body>
        <section>
            <br>
            <h1>GENERO GUARDAR</h1>
            <form method="post" action="../Controladores/generoController.php">		
                <input type="text" placeholder="Nombre Genero"  name="nombre" required>
                <input type="submit" name="accion" value="registrar">
            </form>
        </section>
    </body>
</html>