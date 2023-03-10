<?php
    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','http://localhost/projeto_redesocial/RedeSocial/Views/pages/');
    define('INCLUDE_PATH','http://localhost/projeto_redesocial/');

    $app = new RedeSocial\Application();

    $app->run();
?>