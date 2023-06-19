<?php
include("../header.php");
?>

<?php
include("../database.php");

$sqlCliente = "SELECT * FROM cliente";
$resultado = mysqli_query($conn, $sqlCliente);

if (mysqli_num_rows($resultado)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "
        <table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Nome</th>
                <th scope='col'>CPF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope='row'>$row[id]</th>
                <td>$row[nome]</td>
                <td>$row[cpf]</td>
                </tr>
            </tbody>
        </table>";
    }
} else {
    echo "Nenhum cliente encontrado!";
}

mysqli_close($conn);
?>