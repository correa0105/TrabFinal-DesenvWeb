<?php

include_once '../dao/ShoppingDAO.php';
include_once '../dao/LocalDAO.php';
include_once '../dao/SupplierDAO.php';

$action = "store";
$item = "";
$supplierSelected = "";
$localSelected = "";
$deliveryDate = "";

if (isset($_REQUEST['edit'])) {
    $id = $_REQUEST['id'];
    $shoppingEdited = ShoppingDAO::show($id);
    $item = $shoppingEdited->getItem();
    $supplierSelected = $shoppingEdited->getShop();
    $localSelected = $shoppingEdited->getLocal();
    $deliveryDate = $shoppingEdited->getDeliveryDate();
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

    <div class="shopping">
        <p class="mb-2 p-1 border-bottom">Cadastrar</p>
        <section class="bg-light p-3 rounded-3">
            <form method="POST" action="../controller/ShoppingController.php?<?php echo $action ?>" class="d-flex flex gap-2 gap-sm-3 flex-wrap">
                <div class="form-group col-xl-2 col-12">
                    <input type="text" class="form-control" name="item" value="<?php echo $item ?>" placeholder="Item">
                </div>
                <div class="form-group col-xl-2 col-12">
                    <select name="shop" id="shop" class="form-control">
                        <?php
                        $listSuppliers = SupplierDAO::index();
                        foreach ($listSuppliers as $supplier) {
                            if ($supplierSelected == $supplier->getSupplier()) {
                                echo '
                                    <option selected value="' . $supplier->getSupplier() . '">' . $supplier->getSupplier() . '</option>
                                ';
                            } else {
                                echo '
                                    <option value="' . $supplier->getSupplier() . '">' . $supplier->getSupplier() . '</option>
                                ';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-xl-2 col-12">
                    <select name="local" id="local" class="form-control">
                        <?php
                        $listLocals = LocalDAO::index();
                        foreach ($listLocals as $local) {
                            if ($localSelected == $local->getLocal()) {
                                echo '
                                    <option selected value="' . $local->getLocal() . '">' . $local->getLocal() . '</option>
                                ';
                            } else {
                                echo '
                                    <option value="' . $local->getLocal() . '">' . $local->getLocal() . '</option>
                                ';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-xl-2 col-12">
                    <input type="date" class="form-control" name="deliveryDate" value="<?php echo $deliveryDate ?>" placeholder="Data de entrega">
                </div>
                <input type="submit" class="btn btn-primary ms-auto col-xl-1 col-12 mt-1 mt-sm-0" value="Registrar">
            </form>
        </section>
        <section class="bg-light p-3 rounded-2 mt-4">
            <p>Itens Comprados</p>
            <table class="table table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Loja</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">Data de Entrega</th>
                        <th scope="col">Status</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $listShoppings = ShoppingDAO::index();
                    foreach ($listShoppings as $shopping) {
                        echo '
                            <tr>
                                <td class="itemshop align-middle">' . $shopping->getItem() . '</td>
                                <td class="itemshop align-middle">' . $shopping->getShop() . '</td>
                                <td class="itemshop align-middle">' . $shopping->getLocal() . '</td>
                                <td class="itemshop align-middle">' . $shopping->getDeliveryDate() . '</td>
                            ';
                        if ($shopping->getDone() == 1) {
                            echo '
                                <td class="itemshop align-middle">Entregue</td>
                            ';
                        } else {
                            echo '
                                <td class="itemshop align-middle">Pendente</td>
                            ';
                        }
                        echo '
                            <td class="d-flex flex-direction-row gap-2 h-100">
                                <a href="../controller/ShoppingController.php?done&id=' . $shopping->getId() . '" class="btn"><i class="bi bi-check2"></i></a>
                                <a href="../controller/ShoppingController.php?delete&id=' . $shopping->getId() . '" class="btn"><i class="bi bi-x"></i></a>
                                <a href="?edit&id=' . $shopping->getId() . '" class="btn"><i class="bi bi-pen"></i></a>
                            </td>
                        </tr>
                        ';
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>

</body>

</html>