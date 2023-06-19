<?php
include("../header.php");

include("../database.php");

echo "
<div class='card col-md-6 offset-3' style='margin-top: 1em;'>
    <div class='card-header'>
        <h3 class='card-title' style='text-align: center'>Realizar aluguel</h3>
    </div>

    <div class='card-body'>
        <div class='row'>
            <div class='col-md-4 offset-4'>
                <form action='./aluguel.php' method='post'>
                    <div class='form-group'>
                        <label>Cliente:</label>
                        <input type='text' name='modelo' placeholder='Cliente' class='form-control'><br>
                    </div>
                    <div class='form-group'>
                        <label>Carro:</label>
                        <select class='form-select' aria-label='Default select example'>
                            <option selected>Modelos</option>
                            <option>$row[modelo]</option>
                        </select><br>
                    </div>
                    <div class='form-group' style='text-align: center;'>
                        <button class='btn btn-success form-control' type='submit'>
                            Fazer aluguel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
?>