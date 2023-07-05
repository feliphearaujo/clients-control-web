<?php
    //iniciando o uso da sessão
    session_start();
    include_once "config/conexao.php";
    include_once "model/cliente.php";
    include_once "dao/clienteDao.php";
    //include_once "controller/pessoaController.php";
    
    $ClienteDao = new ClienteDao();
    //include_once "controller/pessoaController.php";
    include "cabecalho.html";
?>
    <table class="table table-hover table-primary-f">
        <tr><th>CPF</th><th>Nome</th><th>Data</th><th>Endereço</th>
            <th>Telefone</th><th>Email</th><th>Serviço</th><th>Valor</th><th></th></tr>
        <?php
            
            $result = $ClienteDao->read();
            //Se o result estiver nulo é porque aconteceu um erro
            if(is_null($result)){
                echo "<tr><td colspan='6'>Erro ao buscar os dados do banco</td></tr>";
            }else{
                //Não aconteceu nenhum erro, percorrer os itens do array
                foreach($result as $item){
                    echo "<tr>";
                    echo "<td>".$item->cpfcliente."</td>";
                    echo "<td>".$item->nome."</td>";
                    echo "<td>".$item->dia."</td>";
                    echo "<td>".$item->endereco."</td>";
                    echo "<td>".$item->telefone."</td>";
                    echo "<td>".$item->email."</td>";
                    echo "<td>".$item->servico."</td>";
                    echo "<td>".$item->valor."</td>";
                    echo "<td>";
                    //link para alterar
                    echo "<a href='cadastro.php?idcliente={$item->idcliente}'><img src='img/alterar.png' width='18'></a>";
                    //link para deletar
                    echo "<a href='controller/clienteControler.php?idcliente={$item->idcliente}'><img src='img/apagar.png' width='18'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>

<?php
    include "rodape.html";
?>