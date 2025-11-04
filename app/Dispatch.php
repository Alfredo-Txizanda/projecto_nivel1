<?php

    namespace app;

    use src\classes\Routes;

    class Dispatch extends Routes {

        #ATRIBUTOS
        private $metodo;
        private $param = [];
        private $objecto;

        #MÉTODOS GETTER E SETTER
        protected function getMetodo() {return $this->metodo;}
        public function setMetodo($metodo) {$this->metodo = $metodo;}
        protected function getObjecto() {return $this->objecto;}
        public function setObjecto($objecto) {$this->objecto = $objecto;}
        protected function getParam() {return $this->param;}
        public function setParam($param) {$this->param = $param;}

        #MÉTODO CONSTRUTOR
        public function __construct()
        {
            self::addController();
        }

        #MÉTODO PARA ADD DE CONTROLLER
        private function addController()
        {
            $rotaController = $this->getRota();
            $nameSpace = "app\\controller\\{$rotaController}";

            if (class_exists($nameSpace)) {
                $this->objecto = new $nameSpace;
            } else {
                $nameSpace = "app\\controller\\Controller404";
                $this->objecto = new $nameSpace;
            }

            self::addMethod();
        }

        #MÉTODO DE ADD DE METODO DO CONTROLLER
        private function addMethod()
        {
            if (isset($this->parserUrl()[1]) and method_exists($this->objecto, $this->parserUrl()[1])) {
                $this->setMetodo("{$this->parserUrl()[1]}");
            } else {
                $this->setMetodo("index");
            }

            self::addParam();
            call_user_func_array([$this->objecto, $this->getMetodo()], $this->getParam());
        }

        #MÉTODO DE ADD DE PARAMETRO DE CONTROLLER
        private function addParam()
        {
            $paramArray = array_slice($this->parserUrl(), 2);
            $this->setParam($paramArray);
        }
    }
