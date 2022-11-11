<?php 
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    
    $sql = "UPDATE alumnos SET nombre='$nombre', apaterno='$apaterno', amaterno='$amaterno', direccion='$direccion', ciudad='$ciudad' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        Header("Location: index.php");
    }else {
        echo $query;
    }

?>