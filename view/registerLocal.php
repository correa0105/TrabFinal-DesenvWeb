<?php

include_once '../dao/LocalDAO.php';

$action = "store";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/hover.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>TI System</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-2 px-md-4">
        <a class="navbar-brand" href="/index.php">TI System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./registerLocal.php">Unidades</a>
                        <a class="dropdown-item" href="./registerShop.php">Fornecedor</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="./tasks.php">Tarefas</a></li>
                <li class="nav-item active"><a class="nav-link" href="./visits.php">Visitas Técnicas</a></li>
                <li class="nav-item"><a class="nav-link" href="./shopping.php">Compras</a></li>
            </ul>
        </div>
    </nav>

    <div class="register">
        <p class="mb-2 p-1 border-bottom">Cadastrar Unidades</p>
        <section class="bg-light p-3 rounded-3">
            <form method="POST" action="../controller/LocalController.php?<?php echo $action ?>" class="d-flex flex gap-2 gap-sm-3 flex-wrap">
                <div class="form-group col-xl-2 col-12">
                    <input class="form-control" type="text" name="local" placeholder="Unidade">
                </div>
                <input type="submit" class="btn btn-primary ms-auto col-xl-2 col-12 mt-1 mt-sm-0" value="+">
            </form>
        </section>
        <section class="bg-light p-3 rounded-2 mt-4">
            <p>Unidades</p>
            <div>
                <ul class="list-group">
                    <?php
                    $listLocals = LocalDAO::index();
                    foreach ($listLocals as $local) {
                        echo '
                            <li class="list-group-item d-flex justify-content-between align-items-center">' . $local->getLocal() . '<span><a href="../controller/LocalController.php?delete&id=' . $local->getId() . '" class="btn"><i class="bi bi-x"></i></a></span>
                            </li>
                        ';
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>

</body>

</html>