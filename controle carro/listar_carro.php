<?php
include("../header.php");
?>

<?php
include("../database.php");

$sqlCliente = "SELECT * FROM carro";
$resultado = mysqli_query($conn, $sqlCliente);

if (mysqli_num_rows($resultado)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Modelo: " . $row["modelo"] . "<br>";
        echo "Ano: " . $row["ano"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Nenhum Carro encontrado!";
}

mysqli_close($conn);
?>