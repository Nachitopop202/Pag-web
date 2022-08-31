<?php
    print_r($_POST);
    if(!isset ($_POST['codigo'])){
       header('location: index.php?mensaje=error');
       }
      
    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $paginas = $_POST['txtPaginas'];
    $libro = $_POST['txtLibro'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, = ?, paginas = ? where libro = ?;");
    $resultado = $sentencia->execute([$nombre, $paginas, $libro, $codigo]);

    if ($resultado == TRUE){
        header('location: index.php?mensaje=editado');
    }else{
        header('location: index.php?mensaje=error');
        exit();
    }





?>