<?php

class Employee extends db{


    protected function getEmployees(){
        $sql = "SELECT * FROM Empleados";
        $result = $this->connect()->query($sql);
        $numRows= $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function insertEmployee($nombre, $apellido_paterno,$apellido_materno,$sueldo,$puesto){
        $sql = "INSERT INTO Empleados(Nombre,Apellido_Paterno,Apellido_Materno, Sueldo, Puesto) 
                VALUES ('$nombre','$apellido_paterno','$apellido_paterno','$sueldo','$puesto')";
        $exec = mysqli_query($this->connect(), $sql);
        return $exec;
    }

    public function updateEmployee($id,$nombre, $apellido_paterno,$apellido_materno,$sueldo,$puesto){
        $sql = "UPDATE Empleados SET Nombre = '$nombre', Apellido_Paterno = '$apellido_paterno', Apellido_Materno = '$apellido_materno', Sueldo = '$sueldo', Puesto = '$puesto' WHERE Id_Empleado = $id";
        $exec = mysqli_query($this->connect(), $sql);
        return $exec;
    }

    public function deleteEmployee($id){
        $sql = "DELETE FROM Empleados WHERE Id_Empleado = $id";
        $exec = mysqli_query($this->connect(), $sql);
        return $exec;
    }
}

?>