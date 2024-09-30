<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro na agenda</h1>

    <fieldset>
    <legend>Cadastro</legend>
    <form action="processaCadastro.php" method="post">
            <input type="text" name="nome" placeholder="Digite seu nome" required> <br><br>
            <input type="email" name="email" placeholder="Digite seu e-mail" required> <br><br>
            <input type="tel" name="fone" placeholder="Digite seu telefone" required> <br><br>
            <input type="date" name="data" required> <br><br>
            <input type="submit" value="Cadastrar">
            
        </fieldset>
    </form>
</body>
</html>
