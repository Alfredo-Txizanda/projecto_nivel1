<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerQuarto extends Render implements InterfaceView  {
        public function __construct()
        {
            $this->setTitulo("Quartos");
            $this->setDescricao("Veja a nossa magnífica coleção de quartos");
            $this->setPalavraChave("quartos, hotel, suítes, acomodações, Sossego, Descanso");
            $this->setPasta("quarto");
            //$this->renderLayout();
        }

        public function index()
        {
            $this->renderLayout();
        }
    }
