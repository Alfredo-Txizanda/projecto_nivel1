<?php

    namespace src\classes;

    use src\traits\TraitUrlParser;

    class Routes {
        use TraitUrlParser;

        private $rota;

        #METODO QUE RETORNA A ROTA
        public function getRota(){
            $url = $this->parserUrl();
            $i = $url[0];

            $this->rota = array(
              ""        => "ControllerHome",
              "home"    => "ControllerHome",
              "quarto"  => "ControllerQuarto",
              "reserva" => "ControllerReserva",
              "detalhe" => "ControllerDetalhe",
              "admin"   => "ControllerAdmin",
              "login"   => "ControllerLogin",
              "galeria" => "ControllerGaleria",
              "sobre"   => "ControllerSobre",
            );

            if (array_key_exists($i, $this->rota)) :
                if (file_exists(DIRREQ."app/controller/{$this->rota[$i]}.php")) :
                    return $this->rota[$i];
                else:
                    return  "ControllerHome";
                endif;
            else:
                return  "Controller404";
            endif;
        }
    }
