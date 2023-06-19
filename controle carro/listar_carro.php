<?php
include("../header.php");
?>

<?php
include("../database.php");

$sqlCliente = "SELECT * FROM carro";
$resultado = mysqli_query($conn, $sqlCliente);

if (mysqli_num_rows($resultado)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "
        <table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Modelo</th>
                <th scope='col'>Ano</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope='row'>$row[id]</th>
                <td>$row[modelo]</td>
                <td>$row[ano]</td>
                </tr>
            </tbody>
        </table>";
    }
} else {
    echo "Nenhum Carro encontrado!";
}

mysqli_close($conn);
?>