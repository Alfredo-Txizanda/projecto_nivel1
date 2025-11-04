<?php

    namespace app\controller;

    use src\classes\Render;
    use src\interfaces\InterfaceView;

    class ControllerReserva extends Render implements InterfaceView  {
        public function __construct()
        {
            $this->setTitulo("Faça sua Reserva");
            $this->setDescricao("Garanta sua estadia no Hotel Kenyel.");
            $this->setPalavraChave("Reserva, Hotel, Booking, Estadia");
            $this->setPasta("reserva");
            //$this->renderLayout();
        }

        public function index()
        {
            $this->renderLayout();
        }
    }
