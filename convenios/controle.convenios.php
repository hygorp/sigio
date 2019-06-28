<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Convênios</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Controle de Convênios</div>
    </div>
</div>

<div class="controle-convenios">
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Fantasia</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Representante</th>
                <th>Status</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $listaDeConvenios = $ConveniosDAO->listar_convenios();
                if($listaDeConvenios == true){
                    for($i = 0; $i < mysqli_num_rows($listaDeConvenios); $i++){
                        $dados_listaDeConvenios = mysqli_fetch_assoc($listaDeConvenios);
                        echo "<tr>
                        <td>".$dados_listaDeConvenios['id_convenios']."</td>
                        <td>".$dados_listaDeConvenios['nome_fantasia_convenios']."</td>
                        <td>".$dados_listaDeConvenios['endereco_convenios']."</td>
                        <td class='telefone'>".$dados_listaDeConvenios['telefone_convenios']."</td>
                        <td>".$dados_listaDeConvenios['nome_representante_convenios']."</td>
                        <td>".$dados_listaDeConvenios['status_convenios']."</td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>


