<html>
<head>
    <title>Novo Ciente</title>
</head>
<body>
<h1>Novo Cliente</h1>
<form>
    Nome: <input type="text"><br>
    Email: <input type="text"><br>
    Telefone: <input type="text"><br>
    <input type="submit" value="Cadastrar"><br>
   <!-- <a href="http://localhost/projeto/clientes">Listar Cientes</a>-->
    <a href="<?php echo action("ClienteController@listar") ?>">Listar Cientes</a>
</form>
</body>
</html>