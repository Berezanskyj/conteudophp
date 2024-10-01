<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo "Sitema de Condominios" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class="login">
        <div class="form">
            <img src="img/logo.png" class="imagem">
            <form action="php/autenticar.php" method="post">
                <input type="email" name="usuario" placeholder="Seu e-mail" require>
                <input type="password" name="senha" placeholder="Sua senha" require>
                <button>Login</button>
            </form>

            <p class="recuperar"><a title="Clique para recuperar a senha" href="" data-bd-toggle="modal" data-bs-target="#exempleModal">Recuperar Senha</a></p>
        </div>
    </div>
</body>
</html>