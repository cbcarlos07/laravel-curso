    @extends('principal')
    @section('title','Listar Cliente');
    @section('content')
        <div class="container">
                <h1>Listar Clientes <a href="<?php echo action("ClienteController@novo") ?>"><span class='glyphicon glyphicon-plus'></span></a></h1>

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

      @stop <!-- finaliza a section -->