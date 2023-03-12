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
            <h1>Geral <spam style="color:#08A1D9">Junto</spam></h1>
            <p>Faça novas amizades e veja tudo o que eles estao fazendo, e comentando. Todos juntos e misturado. </p>
        </div><!--logo-->

        <div class="form-login">
            <h3>Cria sua Conta</h3>
            <form action="" method="post">
                
                <input type="text" name="nome" placeholder="Nome" id="">
                <input type="text" name="email" placeholder="Email">
               
                <input type="password" name="senha" id="" placeholder="senha">
                <input type="submit" value="Logar" name="acao">
            </form>

            <p><a href="<?php echo INCLUDE_PATH ?>registrar">Criar Conta</a></p>
        </div>

    </div>
</body>
</html>