    @extends('principal')
    @section('title','Editar Cliente');
    @section('content')
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
    </form>
    <a href="<?php echo action("ClienteController@listar2") ?>">Listar Cientes</a>
    <a href="{{ action('ClienteController@listar2')  }}">Listar Cientes</a>
        @stop <!-- Finaliza a section -->
