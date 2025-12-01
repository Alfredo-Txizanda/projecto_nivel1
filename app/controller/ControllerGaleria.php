<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerGaleria extends Render implements InterfaceView  {
        public function __construct()
        {
            $this->setTitulo("Sobre Nós");
            $this->setDescricao("Projecto de defesa final de curso | TCC");
            $this->setPalavraChave("Sobre Nós, sobre, sobre o projecto, Sobre o Hotel, Alfredo, Txizanda");
            $this->setPasta("sobre");
            //$this->renderLayout();
        }

        public function index()
        {
            $this->renderLayout();
        }

    }
