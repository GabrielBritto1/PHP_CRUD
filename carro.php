<?php
include "header.php";
?>

<div class="card col-md-6 offset-3" style="margin-top: 1em;">
    <div class="card-header">
        <h3 class="card-title" style="text-align: center">Cadastro de Carros</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="./carro.php" method="post">
                    <div class="form-group">
                        <label>Modelo:</label>
                        <input type="text" name="modelo" placeholder="Modelo do carro" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label>Ano:</label>
                        <input type="text" name="ano" placeholder="Ano do veículo (XXXX)" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control" type="submit">
                            Adicionar Carro
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST) && !empty($_POST)) {
    if (empty($_POST["modelo"])) {
        ?>
        <div class="alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
            Carro não pode ser vazio
        </div>
        <?php
    } elseif (empty($_POST["ano"])) {
        ?>
        <div class=" alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
            Ano não pode ser vazio
        </div>
        <?php
    } else {
        include "database.php";
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];

        $sqlCarro = "INSERT INTO carro (modelo, ano) VALUES ('$modelo', '$ano')";

        try {
            mysqli_query($conn, $sqlCarro);
            ?>
            <div class=" alert alert-success col-md-6 offset-3" style="margin-top: 1em;"">
                Carro inserido com sucesso!
            </div>
            <?php
        } catch (mysqli_sql_exception) {
            ?>
            <div class=" alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
                Não foi possível registrar o carro!
            </div>
            <?php
        }
        mysqli_close($conn);
    }
}
?>