<?php
include "EstudianteModel.php";
if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
    header('Location: vistaEstudiante.php');
}
else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['direccion'],$_POST['telefono']); 
 header('Location: vistaEstudiante.php');
        
}
else
if(isset($_POST['btnEliminar']))
{
 $nuevoEstudiante->EditarEliminarEstudiante($_POST['Eliminar'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['direccion'],$_POST['telefono']); 
 header('Location: vistaEstudiante.php');
        
}
