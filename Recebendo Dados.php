<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favi.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo Dados de Pagina PHP</title>
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
</head>
<body>
    <h3>NOME DO USUARIO</h3>
    <?= $_POST ['Nome'] ?>
    <hr>
    <h3>EMAIL DO USUARIO</h3>
    <?= $_POST ['E-mail'] ?>
    <hr>
    <h3>SENHA DO USUARIO</h3>
    <?= $_POST ['Senha'] ?>
    <hr>
</body>
</html>