<?php
include "../header.php";
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
                        <input type="text" name="ano" placeholder="(XXXX)" class="form-control"><br>
                    </div>
                    <div class="form-group" style="text-align: center;">
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
        echo "
        <div class='alert alert-danger col-md-6 offset-3' style='margin-top: 1em;''>
            Modelo não pode ser vazio
        </div>";
    } elseif (empty($_POST["ano"])) {
        echo "
        <div class='alert alert-danger col-md-6 offset-3' style='margin-top: 1em;''>
            Ano não pode ser vazio
        </div>";
    } else {
        include "../database.php";
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];

        $sqlCliente = "INSERT INTO carro (modelo, ano) VALUES ('$modelo', '$ano')";

        try {
            mysqli_query($conn, $sqlCliente);
            echo "
            <div class='alert alert-success col-md-6 offset-3' style='margin-top: 1em;''>
                Carro inserido com sucesso!
            </div>";
        } catch (mysqli_sql_exception) {
            echo "
            <div class=' alert alert-danger col-md-6 offset-3' style='margin-top: 1em;''>
                Não foi possível registrar o carro!
            </div>";
        }
        mysqli_close($conn);
    }
}
?>