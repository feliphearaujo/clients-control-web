<?php
class ClienteDao{
    public function create(Cliente $cliente){
             //Insere uma nova pessoa no banco de dados
            try{
                $pdo = Conexao::conectar();
                $sql = "INSERT INTO cliente(cpfcliente, nome, dia, endereco, telefone, email, servico, valor) VALUES(?,?,?,?,?,?,?,?)";
                $query = $pdo->prepare($sql);
                $query->execute([$cliente->cpfcliente, $cliente->nome, $cliente->dia, $cliente->endereco, $cliente->telefone, $cliente->email, $cliente->servico, $cliente->valor]);
                Conexao::desconectar();
                return true;
            }catch(PDOException $exception){
                echo $exception->getMessage();
                return false;
            }
        }
    
        public function read(){
            //Lista todas as pessoas do banco de dados
            try{
                $pdo = Conexao::conectar();
                $sql = "SELECT * FROM cliente ORDER BY nome";
                $result = $pdo->query($sql);
                $lista = [];
                foreach($result as $linha){
                    $lista[] = new Cliente($linha["idcliente"], $linha["cpfcliente"], $linha["nome"], $linha["dia"], $linha["endereco"], $linha["telefone"], $linha["email"], $linha["servico"], $linha["valor"]);
                }
                Conexao::desconectar();
                return $lista;
            }catch(PDOException $exception){
                return null;
            }
        }
    
        public function readId($idcliente){
            //Lista todas as pessoas do banco de dados
            try{
                $pdo = Conexao::conectar();
                $sql = "SELECT * FROM cliente WHERE idcliente=?";
                $query = $pdo->prepare($sql);
                $query->execute([$idcliente]);
                $lista = $query->fetch(PDO::FETCH_ASSOC);
                
                Conexao::desconectar();
                return $lista;
            }catch(PDOException $exception){
                return null;
            }
        }
    
        public function update(Cliente $cliente){
            //Altera um registro(pessoa) do banco de dados
            try{
                $pdo = Conexao::conectar();
                $sql = "UPDATE cliente SET cpfcliente = ?, nome = ?, dia = ?, endereco = ?, telefone = ?, email = ?, servico = ?, valor = ? WHERE idcliente = ?";
                $query  = $pdo->prepare($sql);
                $query->execute([$cliente->cpfcliente, $cliente->nome, $cliente->dia, $cliente->endereco, $cliente->telefone, $cliente->email, $cliente->servico, $cliente->valor,  $cliente->idcliente]);
                Conexao::desconectar();
                return true;
            }catch(PDOException $exception){
                return false;
            }
        }
    
        public function delete($idcliente){
            //Apaga um registro(pessoa) do banco de dados
            try{
                $pdo = Conexao::conectar();
                $sql = "DELETE FROM cliente WHERE idcliente = ?";
                $query = $pdo->prepare($sql);
                $query->execute([$idcliente]);
                Conexao::desconectar();
                return true;
            }catch(PDOException $exception){
                return false;
            }
    }
        
}        