<?php

    #ARQUIVOS DIRECTORIOS RAIZES
    $pastaInterna = "projecto_nivel1/";
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
    define('DIRREQ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . "/{$pastaInterna}");

    #PASTAS ESPECIFICAS
    define('DIRIMG', DIRPAGE . "public/img/");
    define('DIRCSS', DIRPAGE . "public/css/");
    define('DIRJS', DIRPAGE . "public/js/");
    define('DIRFONTS', DIRPAGE . "public/fonts/");
    define('DIRFONTSADMIN', DIRPAGE . "public/fonts/");
    define('DIRAUDIO', DIRPAGE . "public/audio/");
    define('DIRADMIN', DIRPAGE . "public/admin/");
    define('DIRDESIGN', DIRPAGE . "public/design/");
    define('DIRVIDEO', DIRPAGE . "public/video/");
    define('DIRICON', DIRPAGE . "public/icons/");
    define('DIRCSSADMIN', DIRPAGE . "public/admin/css/");
    define('DIRJSADMIN', DIRPAGE . "public/admin/js/");

    #BASE DE DADOS
    define('DBHOST', "localhost");
    define('DBNAME', "projecto");
    define('DBUSER', "txizanda");
    define('DBPASS', "Adm1n.scc.@!");
