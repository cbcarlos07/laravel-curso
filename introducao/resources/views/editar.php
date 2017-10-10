<html>
<head>
    <title>Editar Ciente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h1>Editar Cliente - <?= $id ?></h1>
<form>
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">Nome</span>
        <input type="text" class="form-control" placeholder="Nome" aria-describedby="sizing-addon1">
    </div>
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">Email</span>
        <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
    </div>

    <input type="submit" value="Cadastrar"><br>
   <!-- <a href="http://localhost/projeto/clientes">Listar Cientes</a>-->
    <?= $url ?><br>
    <?= $path ?>
</form>
</body>
</html>