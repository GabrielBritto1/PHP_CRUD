<?php
include("../header.php");
?>


<div class="card col-md-6 offset-3" style="margin-top: 1em;">
    <div class="card-header">
        <h3 class="card-title" style="text-align: center">Atualização de Carros</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="./atualizar_carro.php" method="post">
                    <div class="form-group">
                        <label>ID do Carro:</label>
                        <input type="number" name="id" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label>Modelo:</label>
                        <input type="text" name="novoModelo" placeholder="Cliente" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label>Ano:</label>
                        <input type="text" name="novoAno" placeholder="(XXXX)" class="form-control"><br>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button class="btn btn-success form-control" type="submit">
                            Atualizar Carro
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST) && !empty($_POST)) {
    if (empty($_POST["novoModelo"])) {
        ?>
        <div class="alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
            Modelo não pode ser vazio
        </div>
        <?php
    } elseif (empty($_POST["novoAno"])) {
        ?>
        <div class=" alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
            Ano não pode ser vazio
        </div>
        <?php
    } else {
        include "../database.php";
        $id = $_POST["id"];
        $novoModelo = $_POST["novoModelo"];
        $novoAno = $_POST["novoAno"];

        $sqlCliente = "UPDATE carro SET modelo = '$novoModelo', ano = '$novoAno' WHERE id = $id";

        try {
            mysqli_query($conn, $sqlCliente);
            ?>
            <div class=" alert alert-success col-md-6 offset-3" style="margin-top: 1em;"">
                Carro atualizado com sucesso!
            </div>
            <?php
        } catch (mysqli_sql_exception) {
            ?>
            <div class=" alert alert-danger col-md-6 offset-3" style="margin-top: 1em;"">
                Não foi possível atualizar o carro!
            </div>
            <?php
        }
        mysqli_close($conn);
    }
}
?>