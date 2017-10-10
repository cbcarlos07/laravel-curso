<html>
  <head>
      <title>Listar Cientes</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
            <h1>Listar Clientes</h1>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Ação</td>
                </tr>

            <?php
               foreach ($nomes as $key => $value){
                   echo "<tr>";
                   echo "<td>".$key."</td>";
                   echo "<td>".$value."</td>";
                  // echo "<td><a href='".action("ClienteController@editar")."?id=".$key."'>[Editar]</a></td>";
                   echo "<td>
                            <a href='".action("ClienteController@editar", $key)."'><span class='glyphicon glyphicon-pencil'></span></a>
                            <a href='".action("ClienteController@editar", $key)."'><span class='glyphicon glyphicon-remove'></span></a>
                         </td>";
                   echo "</tr>";
               }
            ?>
            </table>
    </div>
  </body>
</html>