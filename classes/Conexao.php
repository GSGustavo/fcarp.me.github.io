<?php

class Conexao {
    private $conexao;

    protected function conectar() {
        $this -> conexao = mysqli_connect("localhost", "root", "", "fcarp", "3306");
    }

    protected function desconectar() {
        mysqli_close($this->conexao);
    }

    protected function getConexao() {
        return $this->conexao;
    }
}

?>