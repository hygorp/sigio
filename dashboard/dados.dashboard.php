<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a> 
    </div>
</div>
            
<div class="sg-dashboard">
    <div class="ui grid">
        <div class="five wide column">
            <div class="ui green segment">
                <h3 class="ui header centered"><i class="users icon"></i>Pacientes</h3>
                <h2 class="ui header centered"><?php echo $dados_quantidade_pacientes['COUNT(*)']; ?></h2>
            </div>
        </div>
        <div class="five wide column">
            <div class="ui green segment">
                <h3 class="ui header centered"><i class="users icon"></i>Consultas</h3>
            </div>
        </div>
        <div class="five wide column">
            <div class="ui green segment">
                <h3 class="ui header centered"><i class="users icon"></i>Dentistas</h3>
                <h2 class="ui header centered"><?php echo $dados_quantidade_dentistas['COUNT(*)']; ?></h2>
            </div>
        </div>
    </div>
    
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</div>