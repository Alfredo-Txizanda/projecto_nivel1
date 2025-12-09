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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // Simulação de autenticação
            // Em um ambiente real, você faria uma consulta ao banco de dados aqui
            if ($username === 'admin' && $password === 'admin123') {
                $_SESSION['user_logged_in'] = true;
                unset($_SESSION['login_error']); // Limpa qualquer erro anterior
                header('Location: ' . DIRPAGE . 'admin'); // Redireciona para o painel
                exit();
            } else {
                // Autenticação falhou
                $_SESSION['login_error'] = 'Utilizador ou palavra-passe inválidos.';
                header('Location: ' . DIRPAGE . 'admin/login'); // Redireciona de volta para o login
                exit();
            }
        } else {
            // Se não for POST, apenas renderiza a view de login
            $this->setPasta("admin/login");
            $this->renderLayout();
        }
    }

    #RESPONSÁVEL POR RENDERIZAR O LAYOUT ESPECÍFICO DO ADMIN
    public function renderLayout()
    {
        include_once(DIRREQ . "app/view/LayoutAdmin.php");
    }
}
