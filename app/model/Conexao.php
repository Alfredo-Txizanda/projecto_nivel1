<?php

    namespace app\model;

    class Conexao
    {
        #CONEXÃO COM A BASE DE DADOS
        public function conexao_db()
        {
            try {
                $con = new \PDO("mysql:host=".DBHOST.";dbname=".DBNAME."","".DBUSER."","".DBPASS."");
                echo ("Conexão efectuada com sucesso");
                return $con;
            }catch(\PDOException $erro) {
                //echo ("Erro ao conectar a Base de dados");
                return $erro->getMessage();
            }
        }
    }
