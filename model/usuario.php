<?php
class Usuario{
    private $idusuario;
    private $cpfusuario;
    private $senha;

    public function __construct($cpfusuario, $senha){
        $this->cpfusuario = $cpfusuario;
        $this->senha = $senha;
    }

    public function __get($key){
        return $this->{$key};
    }

    public function __set($key, $value){
        $this->{$key} = $value;
    }
}

?>