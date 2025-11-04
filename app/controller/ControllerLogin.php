<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerLogin extends Render implements InterfaceView
    {
        public function __construct()
        {
            // Inicia a sessão em todas as acções do controller
            /*if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }*/

            $this->setTitulo("login");
            $this->setDescricao("Página de acesso | Login.");
            $this->setPalavraChave("Login, Entrada, Acesso");
            //$this->setPasta("admin/login");
            $this->setPasta("login");
        }

        // Página principal do dashboard
        public function index()
        {
            $this->renderLayout();
        }

        #RESPONSÁVEL POR RENDERIZAR O LAYOUT ESPECÍFICO DO ADMIN
        public function renderLayout()
        {
            include_once(DIRREQ . "app/view/LayoutAdmin.php");
        }
    }
