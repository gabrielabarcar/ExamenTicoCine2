<?php 
require '../LogicaNegocio/PeliculasServicios.php';   
?>
<body>
    <section>
        <br>
        <h1>Votar</h1>
        <form action="../Controladores/peliculaController.php" method="POST">
            <label>Codigo Pelicula</label>
            <input type="text" readonly="" name="codigo" value="<?php echo $_GET['cod'];?>">
            <label>Puntuacion Actual</label>
            <input type="text" readonly="" name="puntuacion" value="<?php echo $_GET['punto'];?>">
            <input type="number" placeholder="Ingresar Puntuacion" name="votar" required min="1" max="10">
            <input type="submit" name="accion" value="votar">
          </form>   
        
    </section>
    </body>
</html>