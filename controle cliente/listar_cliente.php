<?php
include("../header.php");
?>

<?php
include("../database.php");

$sqlCliente = "SELECT * FROM cliente";
$resultado = mysqli_query($conn, $sqlCliente);

if (mysqli_num_rows($resultado)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "CPF: " . $row["cpf"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Nenhum cliente encontrado!";
}

mysqli_close($conn);
?>