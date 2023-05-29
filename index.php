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

    <title>TI System</title>
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
                            <a class="dropdown-item" href="/view/tasks.php">TI System</a>
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

    <section id="banner-principal" class="desktop-container mt-5">
        <div class="container">
            <div class="row gap-md-0 gap-md-0 gap-3">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="./img/undraw_visionary_technology.svg" width="450px" alt="">
                </div>
                <div class="texto-chamada col-12 col-md-6 d-flex justify-content-center align-items-center">
                    Estamos comprometidos em fornecer aos nossos clientes as melhores soluções em software para atender às suas necessidades específicas de negócios. 
                    Com uma equipe altamente qualificada de desenvolvedores de software, 
                    temos a experiência e as habilidades necessárias para criar soluções personalizadas e escaláveis para qualquer tipo de organização.
                </div>
            </div>
        </div>
    </section>

    <main id="principal" class="desktop-container mt-5">
        <h1 class="h4 border-bottom border-secondary pb-3">Atendimento voltado para empresas e clientes corporativos</h1>
        <div class="row mt-5 bg-warning d-flex justify-content-center align-items-center container mx-auto">
            <div class="p-4 col-12 col-md-3">
                <p class="h4">Porque utilizar a <span class="text-primary">Schema Solutions?</span></p>
            </div>
            <div class="p-4 col-12 col-md-3 d-flex flex-column gap-3 card-ant-center">
                <span><img src="/img/verified.png" width="48" alt=""></span>
                <p class="h5 text-white">+ Segurança</p>
            </div>
            <div class="p-4 col-12 col-md-3 d-flex flex-column gap-3 card-center">
                <span><img src="/img/control-panel.png" width="48" alt=""></span>
                <p class="h5 text-white">+ Facilidade</p>
            </div>
            <div class="p-4 col-12 col-md-3 d-flex flex-column gap-3">
                <span><img src="/img/continuous.png" width="48" alt=""></span>
                <p class="h5 text-white">+ Desempenho</p>
            </div>
        </div>
    </main>

    <section id="orcamento" class="desktop-container row mt-5 py-5 border-bottom border-top">
        <form class="col-12 col-md-5 d-flex flex-column">
            <h3 class="text-primary mb-3">SOLICITE SEU ORÇAMENTO</h3>
            <div class="d-flex flex-column gap-2">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Digite seu email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Digite seu CNPJ">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Telefone de Contato">
                </div>
                <div class="form-group p-2 border rounded bg-danger">
                    <p class="mb-1">Porte da Empresa</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option1" checked>
                        <label class="form-check-label">Grande</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label">Médio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label">Pequeno</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>
        <div class="col-12 col-md-7 d-flex justify-content-center">
            <img src="./img/undraw_printing_invoices.svg" width="550px" alt="">
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