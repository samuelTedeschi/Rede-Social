<?php
    session_start();
    require('vendor/autoload.php');
    $app = new RedeSocial\Application();

    $app->run();
?>