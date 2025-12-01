<?php

    namespace app\controller;

    /*class Controller404 {
        public function __construct ()
        {
            echo "<h1 style='color: #000; text-align: left; font-size: 2.5em; '>Esta página não existe!</h1>";
        }
    }*/

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class Controller404 extends Render implements InterfaceView  {
        public function __construct()
        {
            $this->setTitulo("Página Inexistente");
            $this->setDescricao("Projecto final de curso | TCC");
            $this->setPalavraChave("Erro, Erro 404");
            $this->setPasta("erro");
            //$this->renderLayout();
        }

        public function index()
        {
            $this->renderLayout();
        }

    }
