<?php
    include('../db/db.php');
    include('../clases/employee.php');
    $employee = new Employee();
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $apellido_paterno = $_POST['apellido_paterno'];
        $apellido_materno = $_POST['apellido_materno'];
        $sueldo = $_POST['sueldo'];
        $puesto = $_POST['puesto'];
        $employee->insertEmployee($nombre, $apellido_paterno,$apellido_materno,$sueldo,$puesto);
        header("Location: ../index.php");
    }
?>