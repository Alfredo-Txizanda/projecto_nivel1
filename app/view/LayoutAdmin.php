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

    <link rel="stylesheet" href="<?= DIRCSSADMIN . 'bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?= DIRCSSADMIN . 'style.css'; ?>">
    <link rel="stylesheet" href="<?= DIRCSSADMIN . 'all.min.css'; ?>">
    <link rel="stylesheet" href="<?= DIRCSSADMIN . 'fontawesome.min.css'; ?>">

    <?= $this->addHead(); ?>
</head>
<body>
    <div class="container-fluid">
        <div class="cabecalho-admin">
            <?php echo $this->addHeader(); ?>
            <!-- INÍCIO HEADER -->
            <header class="header">
                <div class="info-header">
                    <div class="logo">
                        <h3><a href="<?= DIRPAGE; ?>" style="color: white; text-decoration: none;">Hotel Kenyel</a></h3>
                        <!-- Botão para alternar a sidebar em mobile -->
                        <button class="btn btn-link text-white d-md-none" id="sidebarToggle">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <div class="icons-header">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div style="align-items: center;" class="info-header">
                    <i class="fa-solid fa-envelope"></i>
                    <i class="fa-solid fa-bell"></i>
                    <img src="<?= DIRIMG . 'perfil.jpg'; ?>" alt="Imagem de perfil">
                </div>
            </header>
            <!-- FIM HEADER -->
        </div>

        <div class="corpo-admin">
            <?php echo $this->addMain(); ?>
        </div>

        <div class="rodape-admin">
            <?php echo $this->addFooter(); ?>
        </div>

        <script src="<?php echo DIRJSADMIN . 'jquery.min.js'; ?>"></script>
        <script src="<?php echo DIRJSADMIN . 'bootstrap.bundle.min.js'; ?>"></script>
        <script src="<?php echo DIRJSADMIN . 'all.min.js'; ?>"></script>
        <script src="<?php echo DIRJSADMIN . 'fontawesome.min.js'; ?>"></script>
        <script src="<?php echo DIRJSADMIN . 'script.js'; ?>"></script>
    </div>
</body>

</html>
