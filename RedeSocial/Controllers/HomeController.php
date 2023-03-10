<?php

    namespace RedeSocial\Controllers;

    class HomeController{

        public function index() {

            if(isset($_SESSION['login'])){
                //renderiza a home do usuario
                \RedeSocial\Views\MainView::render('home');
            }else{
                //renderiza para criar conta
                \RedeSocial\Views\MainView::render('login');
            }
        }
    }

?>