<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href="styles.css">
    <script src="node-modules/bootstrap/dist/js/bootstrap.min.js">
     </script>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="apellidos">Apellidos</label> apellidos
            <input type="text" name="apellidos">
        </p>
        
        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
            <input type="submit" value="Guardar Registro">
        </p>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col">
        
        <table  border="1">
            <table "tabl">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td class="info">  <?php echo $Estudiantes['nombre'] ?> </td>
                <td class="table-warning">  <?php echo $Estudiantes['apellidos'] ?> </td>
                <td class="table-danger">  <?php echo $Estudiantes['direccion'] ?> </td>
                <td class="table-success">  <?php echo $Estudiantes['telefono'] ?> </td>
                <td  class="table-info">Editar</td>
                <td class="table-danger">Eliminar</td>
          </tr>
          
       <?php } ?>
    
    </table>

     </div>
  </div>
</div>

    
</body>
</html>