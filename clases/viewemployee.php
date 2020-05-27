<?php

class ViewEmployees extends Employee{

    public $id;

    public function showEmployees(){
        $datas = $this->getEmployees();
        foreach($datas as $data){
            $this->id = $data['Id_Empleado'];
            echo '
                <tr>
                    <td>'.$this->id.'</td>
                    <td>'.$data['Nombre'].'</td>
                    <td>'.$data['Apellido_Paterno'].'</td>
                    <td>'.$data['Apellido_Materno'].'</td>
                    <td>'.$data['Sueldo'].'</td>
                    <td>'.$data['Puesto'].'</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#modify-form'.$data['Id_Empleado'].'">Modificar</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-outline-danger btn-block" data-toggle="modal" data-target="#delete-employee'.$data['Id_Empleado'].'">Eliminar</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Modal Modify-->
                <div class="modal fade" id="modify-form'.$this->id.'" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog"> 
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modificar Empleado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="crud/update.php" method="POST">
                                <div class="modal-body">
                                        <input class="d-none" name="id" value="'.$this->id.'">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="'.$data['Nombre'].'">
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido_paterno">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="'.$data['Apellido_Paterno'].'">
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido_materno">Apellido Materno</label>
                                            <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="'.$data['Apellido_Materno'].'">
                                        </div>
                                        <div class="form-group">
                                            <label for="sueldo">Sueldo</label>
                                            <input type="text" class="form-control" id="sueldo" name="sueldo" value="'.$data['Sueldo'].'">
                                        </div>
                                        <div class="form-group">
                                            <label for="puesto">Puesto</label>
                                            <input type="text" class="form-control" id="puesto" name="puesto" value="'.$data['Puesto'].'">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="submit_update" value="update">Modificar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Delete-->
                <div class="modal fade" id="delete-employee'.$this->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content  text-light">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title " id="exampleModalLabel">¿Estas seguro de que quieres eliminarlo?</h5>
                                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="crud/delete.php">
                                    <div class="row">
                                        <input class="d-none" name="id" value="'.$this->id.'">
                                        <div class="col">
                                            <button type="submit" value="submit" name="submit_delete" class="btn btn-danger btn-block">Si</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-secondary btn-block"
                                                data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    }

}

?>