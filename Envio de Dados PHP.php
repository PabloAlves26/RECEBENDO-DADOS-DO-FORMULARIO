<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favi.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Dados PHP</title>
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <link rel = "stylesheet" href = "css/estilos.css">
</head>
<body>
    <div class = "container">
        <div id = "titulo">

            <h1>ENVIO DE DADOS PARA PAGINA USANDO PHP</h1>
        </div>
    <figure id = "site">
        <img src = "img/site.png">
    </figure>

    <form action = "Recebendo Dados.php" method = "POST">
        <legend>Digite seu Nome:</legend>
        <input type = "text" name ="Nome" value = "" autofocus required>
        <br>
        <legend>Digite seu E-mail</legend>
        <input type  ="email" name = "E-mail" placeholder = "email@exemplo.com" required>
        <br>
        <legend>Digite sua senha:</legend>
        <input type = "password" name = "Senha" placeholder = "Digite a Senha Aqui">
        
        <input type = "submit" class = "enviar" value = "Enviar">
    </form>
    </div>
</body>
</html>