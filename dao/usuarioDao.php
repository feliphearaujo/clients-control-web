<?php
class UsuarioDao{
    public function create(Usuario $usuario){
        //Insere um novo usuario no banco de dados
        try{
            $pdo = Conexao::conectar();
            $sql = "INSERT INTO usuario(cpfusuario, senha) VALUES(?,?)";
            $query = $pdo->prepare($sql);
            $query->execute([$usuario->cpfusuario, $usuario->senha]);
            Conexao::desconectar();
            return true;
        }catch(PDOException $exception){
            return false;
        }
    }

    public function read(){
        //Lista todos os usuarios do banco de dados
        try{
            $pdo = Conexao::conectar();
            $sql = "SELECT * FROM usuario ORDER BY cpf";
            $result = $pdo->query($sql);
            $lista = [];
            foreach($result as $linha){
                $lista[] = new Usuario($linha["cpf"], $linha["senha"]);
            }
            Conexao::desconectar();
            return $lista;
        }catch(PDOException $exception){
            return null;
        }
    }

    public function readId($cpf){
        //Lista todas as pessoas do banco de dados
        try{
            $pdo = Conexao::conectar();
            $sql = "SELECT * FROM usuario WHERE cpf=?";
            $query = $pdo->prepare($sql);
            $query->execute([$cpf]);
            $lista = $query->fetch(PDO::FETCH_ASSOC);
            
            Conexao::desconectar();
            return $lista;
        }catch(PDOException $exception){
            return null;
        }
    }

    public function consulta($cpf, $senha){
        //Lista todas as pessoas do banco de dados
        try{
            $pdo = Conexao::conectar();
            $sql = "SELECT COUNT(*) as qtd FROM usuario WHERE cpfusuario=? AND senha=?" ;
            $query = $pdo->prepare($sql);
            $query->execute([$cpf,$senha]);
            $lista = $query->fetch(PDO::FETCH_ASSOC);
            
            Conexao::desconectar();
            return $lista;
        }catch(PDOException $exception){
            return null;
        }
    }

    public function update(Usuario $usuario){
        //Altera um registro(pessoa) do banco de dados
        try{
            $pdo = Conexao::conectar();
            $sql = "UPDATE usuario SET cpf = ?, senha = ?";
            $query  = $pdo->prepare($sql);
            $query->execute([$usuario->cpf, $usuario->senha]);
            Conexao::desconectar();
            return true;
        }catch(PDOException $exception){
            return false;
        }
    }

    public function delete($cpf){
        //Apaga um registro(pessoa) do banco de dados
        try{
            $pdo = Conexao::conectar();
            $sql = "DELETE FROM usuario WHERE cpf = ?";
            $query = $pdo->prepare($sql);
            $query->execute([$cpf]);
            Conexao::desconectar();
            return true;
        }catch(PDOException $exception){
            return false;
        }
    }
}