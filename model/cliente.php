<?php
class Cliente{
    private $idcliente;
    private $nome;
    private $endereco;
    private $telefone;
    private $email;
    private $cpfcliente;
    private $dia;
    private $valor;
    private $servico;

    public function __construct($idcliente, $cpfcliente, $nome, $dia, $endereco, $telefone, $email, $servico, $valor){
        $this->idcliente = $idcliente;
        $this->cpfcliente = $cpfcliente;
        $this->nome = $nome;
        $this->dia = $dia;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->servico = $servico;
        $this->valor = $valor;
    }

    public function __get($key){
        return $this->{$key};
    }

    public function __set($key, $value){
        $this->{$key} = $value;
    }

}
?>