<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "aluguelVeiculos";
$conn = "";

try {
    $conn = mysqli_connect($servername, $username, $password, $database);
} catch (mysqli_sql_exception) {
    echo "Não foi possível conectar!";
}
?>