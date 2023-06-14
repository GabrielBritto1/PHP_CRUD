<?php
include "../header.php";
?>

<div class="card col-md-6 offset-3" style="margin-top: 1em;">
    <div class="card-header">
        <h3 class="card-title" style="text-align: center">Cadastro de Clientes</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="./cliente.php" method="post">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="nome" placeholder="Cliente" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label>CPF:</label>
                        <input type="text" name="cpf" placeholder="(XXX.XXX.XXX-XX)" class="form-control"><br>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button class="btn btn-success form-control" type="submit">
                            Adicionar Cliente
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST) && !empty($_POST)) {
    if (empty($_POST["nome"])) {
        ?>
        <div class="alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
            Nome não pode ser vazio
        </div>
        <?php
    } elseif (empty($_POST["cpf"])) {
        ?>
        <div class=" alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
            CPF não pode ser vazio
        </div>
        <?php
    } else {
        include "../database.php";
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];

        $sqlCliente = "INSERT INTO cliente (nome, cpf) VALUES ('$nome', '$cpf')";

        try {
            mysqli_query($conn, $sqlCliente);
            ?>
            <div class=" alert alert-success col-md-6 offset-3" style="margin-top: 1em;"">
                cliente inserido com sucesso!
            </div>
            <?php
        } catch (mysqli_sql_exception) {
            ?>
            <div class=" alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
                Não foi possível registrar cliente, CPF já existe!
            </div>
            <?php
        }
        mysqli_close($conn);
    }
}
?>