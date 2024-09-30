<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Atividade</title>
</head>
<body>
    <fieldset>
        <legend>Primeira Atividade</legend>
        <form action="formulario_atividade.php" method="post">
            <label for="">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
            
            <br><br>

            <label for="">Idade</label>
            <input type="number" name="idade" id="idade" placeholder="Digite sua idade">

            <br><br>

            <label for="">Nota 1</label>
            <input type="decimal" name="pnota" placeholder="Digite a primeira nota">
            
            <br><br>
            
            <label for="">Nota 2</label>
            <input type="decimal" name="snota" placeholder="Digite a segunda nota">
            
            <br><br>

            <label for="">Nota 3</label>
            <input type="decimal" name="tnota" placeholder="Digite a terceira nota">
            
            <br><br>

            <label for="">Nota 4</label>
            <input type="decimal" name="qnota" placeholder="Digite a quarta nota">

            <br><br>

            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Limpar">
        </form>
    </fieldset>
</body>
</html>