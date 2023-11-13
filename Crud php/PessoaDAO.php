<?php
Class PessoaDAO{
    public function insert (Pessoa $pessoa){
        $dao = new Database();
        $conn = $dao -> getConnection();
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha
        )";
        $stmt = $conn-> prepare ($sql);
        $stmt-> bindParam(':nome', $pessoa-> getNome());
        $stmt-> bindParam(':senha', $pessoa-> getSenha());
        $stmt-> bindParam(':email', $pessoa-> getEmail());
        return $stmt-> exe4cute();

    }
}

?>