<?php
include("../header.php");

include("../database.php");

function filtarAluguel($conn, $data, $ativo)
{
    $sql = "SELECT c.nome, c.cpf, cr.modelo, cr.ano
          FROM aluguel AS al
          INNER JOIN cliente AS c ON al.IDCliente = c.id
          INNER JOIN carro AS cr ON al.IDCarro = cr.id
          WHERE al.dataAluguel >= '$data'
          AND al.ativo = '$ativo'
          ORDER BY al.dataAluguel ASC";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado)) {
        return mysqli_fetch_all($resultado, MYSQL_ASSOC);
    } else {
        return [];
    }
}

$filtroData = isset($_POST['data']) ? $_POST['data'] : date("Y-m-d");
$filtroAtivo = isset($_POST['ativo']) ? $_POST['ativo'] : "ativo";

$aluguel = filtarAluguel($conn, $filtroData, $filtroAtivo);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Visualização de Aluguéis</title>
    <style>
        .zebra-list li:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Visualização de Aluguéis</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="data">Data:</label>
        <input type="date" name="data" value="<?php echo $filtroData; ?>">

        <label for="ativo">Situação:</label>
        <select name="ativo">
            <option value="ativo" <?php if ($filtroAtivo == "ativo")
                echo "selected"; ?>>Ativo</option>
            <option value="inativo" <?php if ($filtroAtivo == "inativo")
                echo "selected"; ?>>Inativo</option>
        </select>

        <input type="submit" value="Filtrar">
    </form>

    <ul class="zebra-list">
        <?php foreach ($alugueis as $aluguel): ?>
            <li>
                <strong>Cliente:</strong>
                <?php echo $aluguel['nome']; ?> (CPF:
                <?php echo $aluguel['cpf']; ?>) |
                <strong>Carro:</strong>
                <?php echo $aluguel['modelo']; ?> (Ano:
                <?php echo $aluguel['ano']; ?>)
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>

<?php
mysqli_close($conn);
?>