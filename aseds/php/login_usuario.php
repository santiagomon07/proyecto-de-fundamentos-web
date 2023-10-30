<?php
session_start();
include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'");
$row = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

//$row = $validar_login->fetch_row();
$validar_login=$row->fetch_array(MYSQLI_ASSOC);
$hash='$2y$10$p4tvCvYyxsEUck3R8am5ruL2JmHOYQH1oovzrK/ud8m';
if(password_verify($contrasena, $hash)){
  // $_SESSION['usuario'] = $correo;
    header("location: ../bienvenido.php");
    exit;
}else{

    echo '
    <script>
       alert("Usuario o contraseña incorrecta, verifique los datos ingresados");
       window.location = "../index.php";
    </script>';
    exit;
}
?>