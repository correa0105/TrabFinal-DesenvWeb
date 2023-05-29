<?php

include_once '../dao/TaskDAO.php';

$action = "store";
$title = "";
$priority = "";
$description = "";

if (isset($_REQUEST['edit'])) {
    $id = $_REQUEST['id'];
    $taskEdited = TaskDAO::show($id);
    $title = $taskEdited->getTitle();
    $priority = $taskEdited->getPriority();
    $description = $taskEdited->getDescription();
    $action = "edit&id=" . $id;
}

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

    <div class="tasks">
        <p class="mb-2 p-1 border-bottom">Cadastrar</p>
        <section class="bg-light p-3 rounded-3">
            <form method="POST" action="../controller/TaskController.php?<?php echo $action ?>" class="d-flex flex gap-2 gap-sm-3 flex-wrap">
                <div class="form-group col-xl-2 col-12">
                    <input type="text" class="form-control" name="title" value="<?php echo $title ?>" placeholder="Titulo da atividade">
                </div>
                <div class="form-group col-xl-2 col-12">
                    <select name="priority" class="form-control" id="priority">
                        <?php
                        if ($priority == 'hight') {
                            echo '
                                <option selected value="hight">Alta</option>
                                <option value="medium">Média</option>
                                <option value="low">Baixa</option>
                            ';
                        }
                        if ($priority == 'medium') {
                            echo '
                                <option value="hight">Alta</option>
                                <option selected value="medium">Média</option>
                                <option value="low">Baixa</option>
                            ';
                        }
                        if ($priority == 'low') {
                            echo '
                                <option value="hight">Alta</option>
                                <option value="medium">Média</option>
                                <option selected value="low">Baixa</option>
                            ';
                        } else {
                            echo '
                                <option value="hight">Alta</option>
                                <option value="medium">Média</option>
                                <option value="low">Baixa</option>
                            ';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-xl-2 col-12">
                    <textarea class="form-control" name="description" rows="1"><?php echo $description ?></textarea>
                </div>
                <input type="submit" class="btn btn-primary ms-auto col-xl-2 col-12 mt-1 mt-sm-0" value="Registrar">
            </form>
        </section>

        <section class="d-flex align-items-start flex-wrap gap-2 p-3 mt-3 bg-light rounded-1">
            <div class="d-flex flex-column bg-primary w-100 col-12 col-xl rounded-1 p-2">
                <div class="d-flex justify-content-between mb-3 w-100">
                    <div class="d-flex gap-1">
                        <p class="h5 text-white">Alta Prioridade</p>
                        <span class="text-danger"><i class="bi bi-bookmark-fill"></i></span>
                    </div>
                </div>
                <ul class="m-0 p-0 bg-light rounded-1">
                    <?php
                    $listTasks = TaskDAO::index();
                    foreach ($listTasks as $task) {
                        if ($task->getPriority() == 'hight') {
                            if ($task->getDone() == 1) {
                                echo '
                                    <li class="d-flex align-items-center justify-content-between px-2 border-bottom">
                                        <a class="title done" href="">' . $task->getTitle() . '</a>
                                        <div class="d-flex flex-direction-row">
                                            <a href="../controller/TaskController.php?done&id=' . $task->getId() . '" class="btn"><i class="bi bi-check2"></i></a>
                                            <a href="../controller/TaskController.php?delete&id=' . $task->getId() . '" class="btn"><i class="bi bi-x"></i></a>
                                            <a href="?edit&id=' . $task->getId() . '" class="btn"><i class="bi bi-pen"></i></a>
                                        </div>
                                    </li>
                                ';
                            } else {
                                echo '
                                    <li class="d-flex align-items-center justify-content-between px-2 border-bottom">
                                        <a class="title" href="">' . $task->getTitle() . '</a>
                                        <div class="d-flex flex-direction-row">
                                            <a href="../controller/TaskController.php?done&id=' . $task->getId() . '" class="btn"><i class="bi bi-check2"></i></a>
                                            <a href="../controller/TaskController.php?delete&id=' . $task->getId() . '" class="btn"><i class="bi bi-x"></i></a>
                                            <a href="?edit&id=' . $task->getId() . '" class="btn"><i class="bi bi-pen"></i></a>
                                        </div>
                                    </li>
                                ';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="d-flex flex-column bg-primary w-100 col-12 col-xl rounded-1 p-2">
                <div class="d-flex justify-content-between mb-3 w-100">
                    <div class="d-flex gap-1">
                        <p class="h5 text-white">Média Prioridade</p>
                        <span class="text-warning"><i class="bi bi-bookmark-fill"></i></span>
                    </div>
                </div>
                <ul class="m-0 p-0 bg-light rounded-1">
                    <?php
                    $listTasks = TaskDAO::index();
                    foreach ($listTasks as $task) {
                        if ($task->getPriority() == 'medium') {
                            if ($task->getDone() == 1) {
                                echo '
                                    <li class="d-flex align-items-center justify-content-between px-2 border-bottom">
                                        <a class="title done" href="">' . $task->getTitle() . '</a>
                                        <div class="d-flex flex-direction-row">
                                            <a href="../controller/TaskController.php?done&id=' . $task->getId() . '" class="btn"><i class="bi bi-check2"></i></a>
                                            <a href="../controller/TaskController.php?delete&id=' . $task->getId() . '" class="btn"><i class="bi bi-x"></i></a>
                                            <a href="?edit&id=' . $task->getId() . '" class="btn"><i class="bi bi-pen"></i></a>
                                        </div>
                                    </li>
                                ';
                            } else {
                                echo '
                                    <li class="d-flex align-items-center justify-content-between px-2 border-bottom">
                                        <a class="title" href="">' . $task->getTitle() . '</a>
                                        <div class="d-flex flex-direction-row">
                                            <a href="../controller/TaskController.php?done&id=' . $task->getId() . '" class="btn"><i class="bi bi-check2"></i></a>
                                            <a href="../controller/TaskController.php?delete&id=' . $task->getId() . '" class="btn"><i class="bi bi-x"></i></a>
                                            <a href="?edit&id=' . $task->getId() . '" class="btn"><i class="bi bi-pen"></i></a>
                                        </div>
                                    </li>
                                ';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="d-flex flex-column bg-primary w-100 col-12 col-xl rounded-1 p-2">
                <div class="d-flex justify-content-between mb-3 w-100">
                    <div class="d-flex gap-1">
                        <p class="h5 text-white">Baixa Prioridade</p>
                        <span class="text-success"><i class="bi bi-bookmark-fill"></i></span>
                    </div>
                </div>
                <ul class="m-0 p-0 bg-light rounded-1">
                    <?php
                    $listTasks = TaskDAO::index();
                    foreach ($listTasks as $task) {
                        if ($task->getPriority() == 'low') {
                            if ($task->getDone() == 1) {
                                echo '
                                    <li class="d-flex align-items-center justify-content-between px-2 border-bottom">
                                        <a class="title done" href="">' . $task->getTitle() . '</a>
                                        <div class="d-flex flex-direction-row">
                                            <a href="../controller/TaskController.php?done&id=' . $task->getId() . '" class="btn"><i class="bi bi-check2"></i></a>
                                            <a href="../controller/TaskController.php?delete&id=' . $task->getId() . '" class="btn"><i class="bi bi-x"></i></a>
                                            <a href="?edit&id=' . $task->getId() . '" class="btn"><i class="bi bi-pen"></i></a>
                                        </div>
                                    </li>
                                ';
                            } else {
                                echo '
                                    <li class="d-flex align-items-center justify-content-between px-2 border-bottom">
                                        <a class="title" href="">' . $task->getTitle() . '</a>
                                        <div class="d-flex flex-direction-row">
                                            <a href="../controller/TaskController.php?done&id=' . $task->getId() . '" class="btn"><i class="bi bi-check2"></i></a>
                                            <a href="../controller/TaskController.php?delete&id=' . $task->getId() . '" class="btn"><i class="bi bi-x"></i></a>
                                            <a href="?edit&id=' . $task->getId() . '" class="btn"><i class="bi bi-pen"></i></a>
                                        </div>
                                    </li>
                                ';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>

</body>

</html>