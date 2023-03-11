<?php

    namespace RedeSocial\Controllers;

    class RegistrarController{

        public function index() {

            \RedeSocial\Views\MainView::render('registrar');
        }
    }

?>