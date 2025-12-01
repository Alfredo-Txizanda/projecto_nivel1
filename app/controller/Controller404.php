<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class Controller404 {
        public function __construct ()
        {
            echo "<h1 style='color: #000; text-align: left; font-size: 2.5em; '>Esta página não existe!</h1>";
        }

        public function index()
        {
            $this->renderLayout();
        }
    }
