<?php 
  require 'include/header.php';
  require dirname(__DIR__).'/LogicaNegocio/GeneroServicios.php';
  
  if(isset($_GET['cod'])){
      $cod  = $_GET['cod'];
      $servicios = new GeneroServicios();
      $genero = $servicios->obtenerGeneroByCodigo($cod);
  }
?>
    <body>
        <section>
            <br>
            <h3>Eitar Genero</h3>
            <form method="post" action="../Controladores/generoController.php">
                <table id="t1" border="1">
                    <thead>
                        <tr>
                                <th>Codigo Genero</th>
                                <th>Nombre Genero</th>
                                <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><input type="text"  name="codigo" readonly="" value="<?=$genero->getCod_genero();?>"></td>             
                        <td><input type="text" placeholder="Nombre"  name="nombre" value="<?=$genero->getNombre_genero();;?>"> </td>       
                        <td><input type="submit" name="accion" value="actualizar"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </section>
    </body>
</html>