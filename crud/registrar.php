<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtPaginas"])  || empty($_POST["txtLibro"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $paginas = $_POST["txtPaginas"];
    $libro = $_POST["txtLibro"];

    $sentencia = $bd->prepare("INSERT INTO persona(nombre,paginas,libro) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$signo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    }else{
        header('Location: index.php?mensaje=error');
        exit();
    }
?>