<?php
$Usuario=$_POST['usuario'];
$Contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$Usuario;

$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM Usuarios where Usuario='$Usuario' and Contraseña='$Contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.php");

}else{
    ?>
    <?php
    include("index1.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
