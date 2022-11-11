<?php
    include("conexion.php");
    $conexion = conectar();
    $nombre = $_POST['nombre'];
    $apaterno= $_POST['apaterno'];
    $amaterno= $_POST['amaterno'];
    $direccion= $_POST['direccion'];
    $ciudad= $_POST['ciudad'];

    $sql = "INSERT INTO alumnos VALUES(null,'$nombre','$apaterno','$amaterno','$direccion','$ciudad')";
    $ejecutar = mysqli_query($conexion, $sql);

    if($ejecutar){
        Header("Location: index.php");
    }else {
        echo $ejecutar;
    }
?>