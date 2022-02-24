<?php
//Conexion sqli, se crea un objeto al  entregarle las constantes de dominio, usuario, contraseña, DB 
// y se almacena en una variable.
$connection = new mysqli("localhost", "aroldo", "qwaszx.12", "DBArguilea");

//Obtenemos el codigo de error, si este es 0 ignoramos el condicional
//si el codigo de error es distinto de cero, enviamos un informe de codigo de error a pantalla.
if ($connection->connect_errno) {
    printf("Coneccion fallida: %s\n", $connection->connect_error);
    exit();
}