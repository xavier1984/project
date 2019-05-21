<?php
$servidor = "localhost";
$database = "pasantias";
$usuario = "root";
$password = "";
// Create connection
$con = mysqli_connect($servidor, $usuario, $password, $database);
if(!$con){
    die(mysqli_connect_error());
}else

?>
