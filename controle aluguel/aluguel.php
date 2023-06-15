<?php
include("../header.php");

include("../database.php");

function filtarAluguel($conn, $data, $ativo)
{
    $sql = "SELECT c.nome, c.cpf, cr.modelo, cr.ano
          FROM alugueis al
          INNER JOIN clientes c ON al.IDCliente = c.id
          INNER JOIN carros cr ON al.IDCarro = cr.id
          WHERE al.dataAluguel >= '$data'
          AND al.ativo = '$ativo'
          ORDER BY al.dataAluguel ASC";

    $resultado = mysql_query($conn, $sql);

    if (mysql_num_rows($resultado)) {
        return mysqli_fetch_all($resultado, MYSQL_ASSOC);
    } else {
        return [];
    }
}
?>