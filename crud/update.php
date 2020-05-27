<?php
    include('../db/db.php');
    include('../clases/employee.php');
    $employee = new Employee();
    if(isset($_POST['submit_update'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido_paterno = $_POST['apellido_paterno'];
        $apellido_materno = $_POST['apellido_materno'];
        $sueldo = $_POST['sueldo'];
        $puesto = $_POST['puesto'];
        $employee->updateEmployee($id,$nombre, $apellido_paterno,$apellido_materno,$sueldo,$puesto);
        header("Location: ../index.php");
    }
?>