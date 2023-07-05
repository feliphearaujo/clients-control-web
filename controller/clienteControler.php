<?php
    session_start();
    //Arquivo de conexão com o banco
    include_once "../config/conexao.php";
    //Arquivo com o mapeamento da tabela do banco
    include_once "../model/cliente.php";
    //Arquivo com os métodos que manipulam os dados no banco
    include_once "../dao/clienteDao.php";

    if((isset($_POST["btGravar"]))||(isset($_GET["idcliente"]))){
        $p1 = new Cliente($_POST["txtIdcliente"], $_POST["txtCpfcliente"], 
            $_POST["txtNome"], $_POST["txtDia"], $_POST["txtEndereco"], $_POST["txtTelefone"], $_POST["txtEmail"], $_POST["txtServico"], $_POST["txtValor"]);
        
        $p1Dao = new ClienteDao();
        if(isset($_GET["idcliente"])){
            $resultado = $p1Dao->delete($_GET["idcliente"]);
            $_SESSION["mensagem"]="Excluído com sucesso!";
        }elseif($_POST["txtIdcliente"]==""){
            //Cadastrar
            $resultado = $p1Dao->create($p1);
            $_SESSION["mensagem"]="Cadastrado com sucesso!";
        }else{
            //Alterar
            $resultado = $p1Dao->update($p1);
            $_SESSION["mensagem"]="Alterado com sucesso!";
        }
        $_SESSION["resultado"]=$resultado;
        header("location:../clientes.php");
    }
?>