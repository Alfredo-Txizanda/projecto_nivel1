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
        // Verifica se o utilizador está autenticado
        if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
            // Se não estiver, redireciona para a página de login
            header('Location: ' . DIRPAGE . 'admin/login');
            exit();
        }

        // Se estiver autenticado, renderiza o painel
        $this->renderLayout();
    }

    public function login()
    {
        // Lógica para a página de login (ex: processar o formulário)
        // Por agora, apenas renderiza a view de login
        $this->setPasta("admin/login");
        $this->renderLayout(); // O ideal é ter um layout específico para login
    }

    #RESPONSÁVEL POR RENDERIZAR O LAYOUT ESPECÍFICO DO ADMIN
    public function renderLayout()
    {
        // Esta função deve carregar o layout principal do admin
        // ou o layout de login, dependendo da ação.
        // A lógica de qual 'Main' incluir pode ser melhorada aqui.
        include_once(DIRREQ . "app/view/LayoutAdmin.php");
    }
}
