<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerGaleria extends Render implements InterfaceView  {
        public function __construct()
        {
            $this->setTitulo("Galeria de Fotos");
            $this->setDescricao("Projecto de defesa final de curso | TCC");
            $this->setPalavraChave("Fotos, galeria, Hotel, Quartos");
            $this->setPasta("galeria");
            //$this->renderLayout();
        }

        public function index()
        {
            $this->renderLayout();
        }

    }
