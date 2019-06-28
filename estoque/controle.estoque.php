<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Estoque</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Controle de Estoque</div>
    </div>
</div>

<div class="controle-estoque">
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Data de Entrada</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $listaDeEstoque = $EstoqueDAO->listar_estoque();
                if($listaDeEstoque == true){
                    for($i = 0; $i < mysqli_num_rows($listaDeEstoque); $i++){
                        $dados_listaDeEstoque = mysqli_fetch_assoc($listaDeEstoque);
                        echo "<tr>
                        <td>".$dados_listaDeEstoque['id_estoque']."</td>
                        <td>".$dados_listaDeEstoque['produto_estoque']."</td>
                        <td>".$dados_listaDeEstoque['descricao_produto_estoque']."</td>
                        <td>".$dados_listaDeEstoque['quantidade_estoque']."</td>
                        <td class='data'>".$dados_listaDeEstoque['data_entrada_estoque']."</td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>


