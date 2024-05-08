<?php
   $usuario=$_POST['correo'];
   $password=$_POST['contraseña'];

session_start();
$conexion=mysqli_connect("localhost", "root", "", "registros");

$consulta="SELECT * FROM usuarios WHERE Correo='$usuario' and Contraseña='$password'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);
if ($filas>0)
{
header("location:usuario.php");
}
else
{
echo "<script>if(confirm('Datos Incorrectos, Vuleve a ingresar los datos')){
document.location='login.php';}
else{ alert('Operacion Cancelada');
}</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

