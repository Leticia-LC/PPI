<?php
include_once "Pessoa.php";
include_once "PessoaCOntroller.php";

if(!isset($_POST['op'])){
    echo "Operação não informada";
    header ('Location : index.php');
    exit();

}
$op = $_POST ['op'];

switch ($op){
    case "cadastrar_usuario":

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pessoaCOntroller = new PessoaController();

        $resultado = $pessoaCOntroller -> cadastrarPessoa($nome, $email, $senha);
        break;
}

?>