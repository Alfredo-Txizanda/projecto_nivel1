<?php

    namespace app\model;

    abstract class Conexao
    {
        #CONEXÃO COM A BASE DE DADOS
        public function conexao_db()
        {
            try {
                $con = new \PDO("mysql:host=".DBHOST.";dbname=".DBNAME."","".DBUSER."","".DBPASS."");
                return $con;
            }catch(\PDOException $erro) {
                return $erro->getMessage();
            }
        }
    }
