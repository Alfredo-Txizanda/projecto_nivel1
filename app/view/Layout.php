<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Alfredo Txizanda">
    <meta name="description" content="<?php echo $this->getDescricao(); ?>">
    <meta name="keywords" content="<?php echo $this->getPalavraChave(); ?>">
    <title><?php echo $this->getTitulo(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS . 'bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRFONTS . '/font/bootstrap-icons.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'estilo.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'all.min.css'; ?>">
    <?php echo $this->addHead(); ?>
</head>
<body>
    <div class="container-fluid">
        <!-- NAVBAR - ELEMENTO FIXO DO SISTEMA -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= DIRPAGE; ?>">Hotel Kenyel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo DIRPAGE; ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= DIRPAGE . 'quarto'; ?>">Quartos</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#reservaModal">Reserva</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= DIRPAGE . 'galeria'; ?>">Galeria</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= DIRPAGE . 'admin/login'; ?>">Login</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= DIRPAGE . 'sobre'; ?>">Sobre nós</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="btn btn-outline-success" type="submit">Procurar</button>p
                    </form>
                </div>
            </div>
        </nav>

        <!-- HEADER -->
        <div class="header">
            <?php echo $this->addHeader(); ?>
        </div>

        <!-- CORPO DA APLICAÇÃO -->
        <div class="main">
            <!--<img src="<?php //echo DIRIMG . 'htl.png'; ?>" alt="Fundo do ecrã">-->
            <?php echo $this->addMain(); ?>
        </div>


        <!-- CARREGAR JAVASCRIPT -->
        <script defer src="<?php echo DIRJS . 'bootstrap.bundle.min.js'; ?>"></script>
        <!--<script src="<?php echo DIRJS . 'bootstrap.min.js'; ?>"></script>-->
        <script src="<?php echo DIRJS . 'jquery.min.js'; ?>"></script>
        <script src="<?php echo DIRJS . 'all.min.js'; ?>"></script>
        <script src="<?php echo DIRJS . 'projecto.js'; ?>"></script>
        <!--<script src="<?php echo DIRFONTS . '/font/bootstrap-icons.json'; ?>"></script>-->


        <!-- FOOTER -->
        <div class="footer">
            <!--<p>KenyelSoft - Todos os direitos reservados</p>-->
            <!-- FOOTER GERAL -->
            <footer class="bg-body-tertiary text-center">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="d-flex gap-3 mb-4 justify-content-center">
                        <!-- Facebook -->
                        <a data-mdb-ripple-init class="btn text-white btn-floating m-1 rounded-circle d-flex align-items-center justify-content-center text-white" style="width:50px; height:50px; background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a data-mdb-ripple-init class="btn text-white btn-floating m-1 rounded-circle d-flex align-items-center justify-content-center text-white" style="width:50px; height:50px; background-color: #000;" href="#!" role="button"><i class="fab fa-x-twitter"></i></a>
                        <!-- Google -->
                        <a data-mdb-ripple-init class="btn text-white btn-floating m-1 rounded-circle d-flex align-items-center justify-content-center text-white" style="width:50px; height:50px; background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>
                        <!-- Instagram -->
                        <a data-mdb-ripple-init class="btn text-white btn-floating m-1 rounded-circle d-flex align-items-center justify-content-center text-white" style="width:50px; height:50px; background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                        <!-- Linkedin -->
                        <a data-mdb-ripple-init class="btn text-white btn-floating m-1 rounded-circle d-flex align-items-center justify-content-center text-white" style="width:50px; height:50px; background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin"></i></a>
                        <!-- Github -->
                        <a data-mdb-ripple-init class="btn text-white btn-floating m-1 rounded-circle d-flex align-items-center justify-content-center text-white" style="width:50px; height:50px; background-color: #333333;" href="#!" role="button"><i class="fab fa-github"></i></a>
                        <!-- Telegram -->
                        <a data-mdb-ripple-init class="btn text-white btn-floating m-1 rounded-circle d-flex align-items-center justify-content-center text-white" style="width:50px; height:50px; background-color: #31a7e1;" href="#!" role="button"><i class="fab fa-telegram"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: #08355e; color: #fff;">
                    © 2025 Copyright :
                    <a class="text-white" href="#">Kenyelsoft.co.ao</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- FIM FOOTER -->
            <?php echo $this->addFooter(); ?>
        </div>
    </div>
    <?php include 'reserva/Main.php'; ?>
</body>
</html>
