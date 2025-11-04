<?php

    namespace src\classes;

    class Render
    {
        #ATRIBUTOS
        private $pasta;
        private $titulo;
        private $descricao;
        private $palavraChave;

        #GETTERS E SETTERS
        public function getPasta() {return $this->pasta;}
        public function setPasta($pasta): void {$this->pasta = $pasta;}
        public function getTitulo() {return $this->titulo;}
        public function setTitulo($titulo): void {$this->titulo = $titulo;}
        public function getDescricao() {return $this->descricao;}
        public function setDescricao($descricao): void {$this->descricao = $descricao;}
        public function getPalavraChave() {return $this->palavraChave;}
        public function setPalavraChave($palavraChave): void {$this->palavraChave = $palavraChave; }

        #RESPONSÁVEL POR RENDERIZAR O LAYOUT
        public function renderLayout()
        {
            include_once (DIRREQ."app/view/Layout.php");
        }

        #ADICIONA CARACTERISTICAS ESPECÍFICAS NO HEAD
        public function addHead()
        {
            if (file_exists(DIRREQ . "app/view/{$this->getPasta()}/Head.php")) :
                include (DIRREQ . "app/view/{$this->getPasta()}/Head.php");
            endif;
        }


        #ADICIONA CARACTERISTICAS ESPECÍFICAS NO HEADER
        public function addHeader()
        {
            if (file_exists(DIRREQ . "app/view/{$this->getPasta()}/Header.php")) :
                include (DIRREQ . "app/view/{$this->getPasta()}/Header.php");
            endif;
        }

        #ADICIONA CARACTERISTICAS ESPECÍFICAS NO MAIN
        public function addMain()
        {
            if (file_exists(DIRREQ . "app/view/{$this->getPasta()}/Main.php")) :
                include (DIRREQ . "app/view/{$this->getPasta()}/Main.php");
            endif;
        }

        #ADICIONA CARACTERISTICAS ESPECÍFICAS NO FOOTER
        public function addFooter()
        {
            if (file_exists(DIRREQ . "app/view/{$this->getPasta()}/Footer.php")) :
                include (DIRREQ . "app/view/{$this->getPasta()}/Footer.php");
            endif;
        }
    }