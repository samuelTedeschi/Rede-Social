<?php

    namespace RedeSocial\Controllers;

    class RegistrarController{

        public function index() {

            if(isset($_POST['registrar'])){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    \RedeSocial\Utilidades::alerta('E-mail Invalido');
                    \RedeSocial\Utilidades::redirect(INCLUDE_PATH.'registrar');

                }else if(strlen($senha) < 6){
                    \RedeSocial\Utilidades::alerta('Senha muito curta');
                    \RedeSocial\Utilidades::redirect(INCLUDE_PATH.'registrar');

                }else if(\RedeSocial\Models\UsuarioModel::emailExists($email)){
                    \RedeSocial\Utilidades::alerta('Esse email ja existe no banco de dados');
                    \RedeSocial\Utilidades::redirect(INCLUDE_PATH.'registrar');
                    
                }else{
                    $senha = \RedeSocial\Bcrypt::hash($senha);
                    $registro = \RedeSocial\MySql::connect()->prepare("INSERT INTO usuario VALUES (null,?,?,?)");
                    $registro->execute(array($nome,$email,$senha));

                    \RedeSocial\Utilidades::alerta('Registrado com Sucesso, agora faça seu login');
                    \RedeSocial\Utilidades::redirect(INCLUDE_PATH);
                }
            }


            \RedeSocial\Views\MainView::render('registrar');
        }
    }

?>