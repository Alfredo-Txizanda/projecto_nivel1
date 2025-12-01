<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerHome extends Render implements InterfaceView  {
        public function __construct()
        {
            $this->setTitulo("Página Inicial");
            $this->setDescricao("Projecto de defesa final de curso | TCC");
            $this->setPalavraChave("TCC, tcc, Projecto Final, Hotel, Conclusão de curso, Projecto, Final, Alfredo, Txizanda");
            $this->setPasta("home");
            //$this->renderLayout();
        }

        public function index()
        {
            $this->renderLayout();
        }

    }
