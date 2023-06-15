<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://svgsilh.com/svg/47844.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Aluguel de carro</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../controle cliente/cliente.php">Aluguel de carro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cliente
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../controle cliente/cliente.php">Cadastrar
                                        Cliente</a></li>
                                <li><a class="dropdown-item" href="../controle cliente/atualizar_cliente.php">Atualizar
                                        Cliente</a></li>
                                <li><a class="dropdown-item" href="../controle cliente/deletar_cliente.php">Deletar
                                        Cliente</a></li>
                                <li><a class="dropdown-item" href="../controle cliente/listar_cliente.php">Listar
                                        Clientes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Carro
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../controle carro/carro.php">Cadastrar Carro</a>
                                </li>
                                <li><a class="dropdown-item" href="../controle carro/atualizar_carro.php">Atualizar
                                        Carro</a></li>
                                <li><a class="dropdown-item" href="../controle carro/deletar_carro.php">Deletar
                                        Carro</a></li>
                                <li><a class="dropdown-item" href="../controle carro/listar_carro.php">Listar
                                        Carro</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controle aluguel/aluguel.php">Aluguel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>