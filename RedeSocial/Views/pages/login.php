<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>styles/style.css">
</head>
<body>
    <div class="sidebar"></div>

    <div class="form-container-login">
        <div class="logo">
            <h1>Geral <spam style="color:blue">Junto</spam></h1>
            <p>Faça novas amizades e veja tudo o que eles estao fazendo, e comentando. Todos juntos e misturado. </p>
        </div><!--logo-->

        <div class="form-login">
            <form action="">
                <p>Nome:</p>
                <input type="text" name="login" id="">
                <p>Senha:</p>
                <input type="password" name="senha" id="">
                <input type="submit" value="Logar" name="acao">
            </form>

            <p><a href="<?php echo INCLUDE_PATH ?>registrar">Criar Conta</a></p>
        </div>

    </div>
</body>
</html>