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

            $this->setTitulo("Login");
            $this->setDescricao("Página de acesso | Login.");
            $this->setPalavraChave("Login, Entrada, Acesso");
            $this->setPasta("login");
        }

        // Página principal do login
        public function index()
        {
            $this->renderLayout();
        }

        #RESPONSÁVEL POR RENDERIZAR O LAYOUT PÚBLICO
        public function renderLayout()
        {
            //include_once(DIRREQ . "app/view/Layout.php");
            include_once(DIRREQ . "app/view/LayoutAdmin.php");
        }
    }
