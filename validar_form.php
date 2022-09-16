<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
include('db.php');
$consulta="SELECT * FROM sesion_1 where nombre='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
    header("location:pagina_principal.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Datos Incorrectos</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
