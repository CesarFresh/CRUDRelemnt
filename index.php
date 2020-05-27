<?php  
    include ('db/db.php');
    include ('clases/employee.php');
    include ('clases/viewemployee.php');
    $employees = new ViewEmployees();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container m-5">
        <h1 class="text-center">CRUD - PHP & OOP</h1>
        <hr>
        <button type="button" class="btn btn-outline-success btn-block mt-2" data-toggle="modal"
            data-target="#insert-form">
            Agregar Empleado
        </button>
        <br>
        <div class="table table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Sueldo</th>
                        <th>Puesto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $employees->showEmployees();
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Modal Insert-->
        <div class="modal fade" id="insert-form" data-backdrop="static" data-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Agregar Empleado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form name="form-insert" method="POST" action="crud/insert.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="apellido_paterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
                            </div>
                            <div class="form-group">
                                <label for="apellido_materno">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno">
                            </div>
                            <div class="form-group">
                                <label for="sueldo">Sueldo</label>
                                <input type="text" class="form-control" id="sueldo" name="sueldo">
                            </div>
                            <div class="form-group">
                                <label for="puesto">Puesto</label>
                                <input type="text" class="form-control" id="puesto" name="puesto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success"  value="insert" name="submit">Agregar</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>


    </div>
</body>

</html>
</script>