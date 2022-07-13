<?php
$servidor="localhost";
$usuario="root";
$password="";

$conn=mysqli_connect($servidor,$usuario,$password);
if(!$conn)
{
    die("Error al realizar la conexion".mysqli_connect_error());

}

echo "conexion realizada correctamente";



?>