<?php 

include("conexion.php");
$conn = conectar();
$id = $_GET['id'];
$sql = "SELECT * FROM alumnos WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$nombre = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="conatiner">
        <div class="row">Datos del alumno</div>
        <div class="row">
           <form action="update.php" method="post">
                Nombre:
                    <input type="text" name="nombre" placeholder="Ingresa tu nombre" class="form-control mb-3" value="<?php echo $nombre['nombre']?>">
                Apellido Paterno:
                    <input type="text" name="apaterno" placeholder="Ingresa tu apellido Paterno" class="form-control mb-3" value="<?php echo $nombre['apaterno']?>">
                Apellido Materno;
                    <input type="text" name="amaterno" placeholder="Ingresa tu apellido materno" class="form-control mb-3" value="<?php echo $nombre['amaterno']?>">
                Dirección:
                    <input type="text" name="direccion" placeholder="Ingresa tu direccion" class="form-control mb-3" value="<?php echo $nombre['direccion']?>">
                Ciudad:
                    <input type="text" name="ciudad" placeholder="Ingresa tu ciudad" class="form-control mb-3" value="<?php echo $nombre['ciudad']?>">
                    <input type="submit" value="Actualizar" class="btn btn-success btn-block">
                    <a href="index.php" class="btn btn-primary">Regresar</a>
           </form>

        </div>
    </div>
    
</body>
</html>