<?php

include_once ("PessoaCOntroller");
include_once("Pessoa.php");
?>

<table id = "lista_usuarios">
<thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
</thead>

<tbody>
    <?php
    $controllerPessoa = new PessoaCOntroller();
    $listarPessoas = $controllerPessoa->listarPessoas();
    var_dump($listaPessoas);
    ?>
</table>
