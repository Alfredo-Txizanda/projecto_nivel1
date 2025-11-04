<?php

    /*namespace src\traits;

    trait TraitUrlParser {
        #DIVIDIR A URL EM UM ARRAY
        public function parserUrl() {
            $url = isset($_GET['url']) ? $_GET['url'] : '';
            return explode("/", rtrim(filter_var($url, FILTER_SANITIZE_URL), "/"));
        }
    }*/

    namespace src\traits;

    trait TraitUrlParser
    {
        /**
         * Analisa o parâmetro 'url' do GET em um array de segmentos.
         *
         * @return array Os segmentos da URL. Para a URL raiz, retorna [''] para compatibilidade.
         */
        public function parserUrl(): array
        {
            // Sanitiza a URL e define uma string vazia como padrão se 'url' não estiver definido.
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL) ?? '';

            // Se a URL estiver vazia (acesso à raiz), retorna um array com uma string vazia.
            // Isso mantém a compatibilidade com o código que pode tentar acessar o índice [0],
            // evitando um erro de "undefined offset" que ocorreria com um array vazio.
            if ($url === '') {
                return [''];
            }

            // Remove a barra final, divide a URL e remove segmentos vazios (ex: de barras duplas //).
            $segments = explode('/', rtrim($url, '/'));
            return array_values(array_filter($segments));
        }
    }