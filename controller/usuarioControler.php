<?php
    session_start();
    //Arquivo de conexão com o banco
    include_once "../config/conexao.php";
    //Arquivo com o mapeamento da tabela do banco
    include_once "../model/usuario.php";
    //Arquivo com os métodos que manipulam os dados no banco
    include_once "../dao/usuarioDao.php";

    // validando usuario
    if(isset($_POST["btLogin"])){
        $p1 = new Usuario($_POST["cpf"], $_POST["senha"]);
        
        $p1Dao = new UsuarioDao();
        $resultado = $p1Dao->consulta($p1->cpfusuario,$p1->senha);
        if($resultado['qtd']>0){
            $_SESSION["logado"]=true;
            header("location:../home.php");
           
        }
        else{
            header("location:../index.html");
        }
        var_dump($resultado);
    }

    if((isset($_POST["btGravar"]))){
        $p1 = new Usuario($_POST['txtCpfusuario'],$_POST['txtSenha']);
        header("location:../index.html");
        $p1Dao = new UsuarioDao();
        $resultado = $p1Dao->create($p1);
        $_SESSION["mensagem"]="Cadastrado com sucesso!";

    }
?>