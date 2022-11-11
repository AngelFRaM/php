<?php
    include ("conexion.php");
    $conexion = conectar();
    $sql = "SELECT * FROM alumnos";
    if (!$ejecutar = mysqli_query($conexion, $sql)) {
        echo "Error: ". mysqli_error($conexion);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class = "container mt-5">
        <div class = "row">
            <h1 class="text-center">CRUD PHP</h1>
        </div>
        <div class = "row">
            <div class = "col-md-3">
                <div class = "row">
                    <h3 class = "text-center">Ingresa Datos</h3>
                </div>
                <form action="insertar.php" method="post">
                    <input type="text" name="nombre" placeholder="Ingresa tu nombre" class="form-control mb-3">
                    <input type="text" name="apaterno" placeholder="Ingresa tu apellido Paterno" class="form-control mb-3">
                    <input type="text" name="amaterno" placeholder="Ingresa tu apellido materno" class="form-control mb-3">
                    <input type="text" name="direccion" placeholder="Ingresa tu direccion" class="form-control mb-3">
                    <input type="text" name="ciudad" placeholder="Ingresa tu ciudad" class="form-control mb-3">
                    <input type="submit" value="Guardar" class="btn btn-success">
                </form>
            </div>
            <div class = "col-md-8">
                <div class = "row">
                    <h3 class = "text-center">Alumnos del sistema</h3>
                </div>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Direccion</th>
                            <th>Ciudad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($item=mysqli_fetch_array($ejecutar)){
                        ?>
                        <tr>
                            <td><?php echo $item['id']?></td>
                            <td><?php echo $item['nombre']?></td>
                            <td><?php echo $item['apaterno']?></td>
                            <td><?php echo $item['amaterno']?></td>
                            <td><?php echo $item['direccion']?></td>
                            <td><?php echo $item['ciudad']?></td>
                            <td>
                                <a href="/actualizar.php?id=<?php echo $item['id']?>" class="btn btn-warning">Editar</a>
                                |
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Borrar</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar usario</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro de eliminar este usario?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                        <a href="/borrar.php?id=<?php echo $item['id']?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Para poder colocar contenedore de dialogo-->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>