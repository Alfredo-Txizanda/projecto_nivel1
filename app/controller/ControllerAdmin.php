<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerAdmin extends Render implements InterfaceView
    {
        public function __construct()
        {
            // Inicia a sessão em todas as acções do controller
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $this->setTitulo("Dashboard Administrativo");
            $this->setDescricao("Área de gestão do sistema.");
            $this->setPalavraChave("admin, dashboard, gestão");
            $this->setPasta("admin");
        }

        // Página principal do dashboard
        public function index()
        {
            $this->renderLayout();
        }

        public function login()
        {
            $this->setPasta("admin");
            include_once(DIRREQ . "app/view/{$this->getPasta()}/login/Main.php");
        }

        public function reserva()
        {
            $this->setPasta("admin");
            include_once(DIRREQ . "app/view/{$this->getPasta()}/reserva/Main.php");
        }

        public function utilizador() {
            $this->setPasta("admin");
            include_once(DIRREQ . "app/view/{$this->getPasta()}/utilizador/Main.php");
        }

        public function quarto() {
            $this->setPasta("admin");
            include_once(DIRREQ . "app/view/{$this->getPasta()}/quarto/Main.php");
        }

        #RESPONSÁVEL POR RENDERIZAR O LAYOUT ESPECÍFICO DO ADMIN
        public function renderLayout()
        {
            include_once(DIRREQ . "app/view/LayoutAdmin.php");
            //include_once(DIRREQ . "app/view/admin/login/Main.php");
        }
    }
