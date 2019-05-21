<?php
try{
include('conexion.php');
$nombre=$_POST['Nombre'];
$ruc=$_POST['Ruc'];
$dir=$_POST['Direccion'];
$tel=$_POST['Telefono'];
$estado=$_POST['Estado'];
$_GRABAR_SQL = "INSERT INTO tbl_empresa (EMP_NOMBRE,EMP_RUC,EMP_DIRECCION,EMP_TELEFONOS,EMP_ESTADO) VALUES ('$nombre','$ruc','$dir','$tel','$estado')";
mysqli_query($con,$_GRABAR_SQL); 
header("Location: ../index.html", true, 301);
mysqli_close($con);
exit();
}catch(Exception $e){
    echo "<script>alert('Error al guardar en la base de datos')</script>";
    mysqli_close($con);
}
?>