<?php

//iniciando o uso da sessão
session_start();
include_once "config/conexao.php";
include_once "model/cliente.php";
include_once "dao/clienteDao.php";
//include_once "controller/pessoaController.php";

$clienteDao = new ClienteDao();

include "cabecalho.html";
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
  //Verificando se extiste algum parâmetro na URL
  if(isset($_GET["idcliente"])){
      //buscar o cadastro correspondente
      $result = $clienteDao->readId($_GET["idcliente"]);
      //var_dump($result);
  }else{
      $result =["idcliente"=>"", "cpfcliente"=>"", "nome"=>"", "dia"=>"", "endereco"=>"", "telefone"=>"", "email"=>"", "servico"=>"", "valor"=>""];
  }

?>

<div class="container" id="container-form">
<form method="post" action="controller/clienteControler.php">
    <input type="hidden" class="form-control" name="txtIdcliente" value="<?php echo  $result["idcliente"]?>">
  <div>
    <label for="inputEmail4" class="form-label">CPF</label>
    <input type="text" class="form-control" id="inputEmail4" name="txtCpfcliente" value="<?php echo  $result["cpfcliente"] ?>">
  </div>
  <div >
    <label for="inputPassword4" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputPassword4" name="txtNome" value="<?php echo  $result["nome"] ?>">
  </div>
  <div >
    <label for="inputCity" class="form-label">Data</label>
    <input type="text" class="form-control" id="inputCity" name="txtDia" placeholder="dd/mm/aaaa" value="<?php echo  $result["dia"] ?>">
  </div>
  <div >
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" name="txtEndereco" class="form-control" id="inputAddress" placeholder="Rua, número, bairro, cidade" value="<?php echo  $result["endereco"] ?>">
  </div>
  <div >
    <label for="inputAddress2" class="form-label">Telefone</label>
    <input type="text" name="txtTelefone" class="form-control" id="inputAddress2" value="<?php echo  $result["telefone"] ?>">
  </div>
  <div >
    <label for="inputCity" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputCity" name="txtEmail" value="<?php echo  $result["email"] ?>">
  </div>
  <div >
    <label for="inputCity" class="form-label">Serviço prestado</label>
    <input type="text" class="form-control" id="inputCity" name="txtServico" value="<?php echo  $result["servico"] ?>">
  </div>
  <div >
    <label for="inputCity" class="form-label">Valor</label>
    <input type="text" class="form-control" id="inputCity" name="txtValor" placeholder="00,00" value="<?php echo  $result["valor"] ?>">
  </div>
  <div class="col-md-4 offset-md-4 p-1">
    <input type="submit" class="btn btn-dark" 
    value="Gravar"name="btGravar">
  </div>
</form>

</div>



<?php
    include "rodape.html";
?>