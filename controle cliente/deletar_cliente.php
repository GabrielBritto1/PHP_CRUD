<?php
include("../header.php");
?>

<div class="card col-md-6 offset-3" style="margin-top: 1em;">
    <div class="card-header">
        <h3 class="card-title" style="text-align: center">Deletar Clientes</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="deletar_cliente.php" method="post">
                    <div class="form-group">
                        <label>ID do Cliente:</label>
                        <input type="number" name="id" class="form-control"><br>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button class="btn btn-success form-control" type="submit">
                            Deletar Cliente
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST) && !empty($_POST)) {
    if (empty($_POST["id"])) {
        ?>
        <div class="alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
            ID não pode ser vazio
        </div>
        <?php
    } else {
        include "../database.php";
        $id = $_POST["id"];

        $sqlCliente = "DELETE FROM cliente WHERE id = $id";

        try {
            mysqli_query($conn, $sqlCliente);
            ?>
            <div class=" alert alert-success col-md-6 offset-3" style="margin-top: 1em;"">
                Cliente deletado com sucesso!
            </div>
            <?php
        } catch (mysqli_sql_exception) {
            ?>
            <div class=" alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
                Não foi possível deletar o cliente!
            </div>
            <?php
        }
        mysqli_close($conn);
    }
}
?>