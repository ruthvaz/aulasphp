<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $bd_name);

if(mysqli_connect_error()):
    echo "Falhou!".mysqli_connect_error();
endif;