<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
      //iniciando o uso da sessão
      session_start();
      include_once "config/conexao.php";
      include_once "model/usuario.php";
      include_once "dao/usuarioDao.php";
      //include_once "controller/pessoaController.php";

      $usuarioDao = new UsuarioDao();
    ?>
    <?php
      if(isset($_SESSION["resultado"])){
        if($_SESSION["resultado"]==true){
          echo "<p>{$_SESSION["mensagem"]}</p>";
        }else{
          echo "<p>Erro ao efetuar a operação</p>";
        }
        $_SESSION["resultado"]=null;
        $_SESSION["mensagem"]=null;
      }
  
      $result =["idusuario"=>"", "cpfusuario"=>"", "senha"=>""];
    ?>

<div class="container" id="container-form">
<form method="post" action="controller/usuarioControler.php">
    <input type="hidden" class="form-control" name="txtIdcliente" value="<?php echo  $result["idusuario"]?>">
  <div>
    <label for="inputEmail4" class="form-label">CPF</label>
    <input type="text" class="form-control" id="inputEmail4" name="txtCpfusuario">
  </div>
  <div >
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="text" class="form-control" id="inputPassword4" name="txtSenha">
  </div>
  <div class="col-md-4 offset-md-4 p-1">
    <input type="submit" class="btn btn-dark" 
    value="Gravar"name="btGravar">
  </div>
</form>

</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>