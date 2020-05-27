<?php
    include('../db/db.php');
    include('../clases/employee.php');
    $employee = new Employee();
    if(isset($_POST['submit_delete'])){
        $id = $_POST['id'];
        $employee->deleteEmployee($id);
        header("Location: ../index.php");
    }
?>