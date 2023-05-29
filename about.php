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

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/hover.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Schema Solutions</title>
</head>

<body>

    <nav id="menu-principal" class="desktop-container mt-md-3 px-3 py-md-3 navbar navbar-expand-lg navbar-light">
        <img src="" alt="">
        <a class="logotipo" href="#">Schema Solutions</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-3" id="navbarNavDropdown">
            <div class="rightMenu">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a class="nav-link hvr-grow text-white" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-grow text-white" href="./about.php">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hvr-grow text-white" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./view/tasks.php">TI System</a>
                            <a class="dropdown-item" href="#">iChest</a>
                            <a class="dropdown-item" href="#">Soluções Especificas</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="leftMenu ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hvr-grow text-warning" href="/signIn.php">Já é Cliente?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="desktop-container mt-4">
        <h1 class="h3">Conheça nosso produto TI System</h1>
        <main id="principal">
            <div class="row mt-4 bg-secondary d-flex justify-content-center align-items-center container mx-auto">
                <div class="p-4 col-12 col-md-3">
                    <p class="h4"><span class="text-primary">TI System </span>Sistema para integrar no seu setor de TI</p>
                </div>
                <div class="p-4 col-12 col-md-3 d-flex flex-column gap-3 card-ant-center">
                    <span><img src="/img/verified.png" width="48" alt=""></span>
                    <p class="h5 text-white">Controle de Estoque</p>
                </div>
                <div class="p-4 col-12 col-md-3 d-flex flex-column gap-3 card-center">
                    <span><img src="/img/control-panel.png" width="48" alt=""></span>
                    <p class="h5 text-white">Controle de Visitas Técnicas</p>
                </div>
                <div class="p-4 col-12 col-md-3 d-flex flex-column gap-3">
                    <span><img src="/img/continuous.png" width="48" alt=""></span>
                    <p class="h5 text-white">Controle de Chamados</p>
                </div>
            </div>
        </main>
    </section>

    <section class="mt-4 carousel desktop-container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./img/carousel1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/carousel2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/carousel3.png" alt="Second slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-primary rounded" aria-hidden="true"></span>
              <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-primary rounded" aria-hidden="true"></span>
              <span class="sr-only"></span>
            </a>
          </div>
    </section>

    <footer id="footer" class="mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="py-3 pt-5 col-12 col-md-4 text-center d-flex flex-column justify-content-start">
                    <h3>Páginas</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="secondary-color nav-link">Home</a></li>
                        <li class="mb-2"><a href="#" class="secondary-color nav-link">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#" class="secondary-color nav-link">Produtos</a></li>
                    </ul>
                </div>
                <div class="py-3 pt-5 col-12 col-md-4 text-center d-flex flex-column justify-content-start" id="footer-column-center">
                    <h3>Contato</h3>
                    <p class="secondary-color">Alguma dúvida? Entre em contato!</p>
                    <p class="store-phone"><i class="bi bi-telephone"></i> (51) 99830-5021</p>
                </div>
                <div class="py-3 pt-5 col-12 col-md-4 text-center d-flex flex-column justify-content-start">
                    <h3>Informações</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="secondary-color nav-link">Política de Privacidade</a></li>
                        <li class="mb-2"><a href="#" class="secondary-color nav-link">Termos de Contrato</a></li>
                        <li class="mb-2"><a href="#" class="secondary-color nav-link">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>