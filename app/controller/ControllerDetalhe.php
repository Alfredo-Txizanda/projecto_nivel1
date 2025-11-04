<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerDetalhe extends Render implements InterfaceView  {
        public function __construct()
        {
            $this->setTitulo("Detalhe");
            $this->setDescricao("Projecto de defesa final de curso | TCC");
            $this->setPalavraChave("Detalhe de quarto, Detalhe, Quarto, hotel, detalhe");
            $this->setPasta("detalhe");
            //$this->renderLayout();
        }

        public function index()
        {
            $this->renderLayout();
        }
    }
