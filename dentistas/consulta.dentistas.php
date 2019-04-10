<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Dentistas</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Consultar Dentistas</div>
    </div>
</div>

<div class="consulta-dentistas">
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>Data de Nascimento</th>
                <th>Tipo do Conselho</th>
                <th>Número do Conselho</th>
                <th>Celular</th>
                <th>Email</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $listaDeDentistas = $DentistasDAO->listar_dentistas();
                if($listaDeDentistas == true){
                    for($i = 0; $i < mysqli_num_rows($listaDeDentistas); $i++){
                        $dados_listaDeDentistas = mysqli_fetch_assoc($listaDeDentistas);
                        echo "<tr>
                        <td>".$dados_listaDeDentistas['nome_completo_dentistas']."</td>
                        <td>".$dados_listaDeDentistas['data_nascimento_dentistas']."</td>
                        <td>".$dados_listaDeDentistas['conselho_tipo_dentistas']."</td>
                        <td>".$dados_listaDeDentistas['conselho_numero_dentistas']."</td>
                        <td>".$dados_listaDeDentistas['celular1_dentistas']."</td>
                        <td>".$dados_listaDeDentistas['email_dentistas']."</td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>