<?php
class PessoaController {
    public function _construct(){


    }

    public function cadastrarPessoa($nome, $email, $senha){

        $pessoa = new Pessoa();
        $pessoa-> setAll(null, $nome, $email, $senha);
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO -> insert($pessoa);

        if(length($nome)>3){

        }
        if(length($email)>10 && strpos($email, '@')>0){

        }

    }

    public function listarPessoa($nome, $email, $senha){

    }

    public function getPessoa($id){

    }

    public function editarPessoa($id){

    }

    public function excluirPessoa($id){

    }
    public function autenticarPessoa($id){

    }


}

?>