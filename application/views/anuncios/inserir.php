<?php $this->load->view("anuncios/head"); ?>

<div class="well">
    <h2>
        Cadastrar Anúncio
    </h2>
</div>

<div class="row">
    <div class="col-lg-12">
        
        <!-- /.panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Funcionários Ativos
                <div class="pull-right">
                    
                </div>
            </div>
            
            
            
            
        </div>
    </div>
</div>

<div id="form">
    <?php
    echo form_open("anuncios/inserir");
    ?>
    <form>
        <div class="col-sm-3">

            <?php
            echo form_label("ID Produto:", "idProd");
            echo form_input(array(
                "id" => "idProd",
                "name" => "idProd",
                "class" => "form-control"
            ));
            ?>
        </div>
        <div class="col-sm-3">

            <?php
            echo form_label("Titulo:", "titulo");
            echo form_input(array(
                "id" => "titulo",
                "name" => "titulo",
                "class" => "form-control"
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Data a ser enviada:", "data");
            echo form_input(array(
                "id" => "data",
                "type" => "date",
                "name" => "data",
                "class" => "form-control"
            ));
            ?>
        </div>

        <div class="col-sm-3" style="margin-top: 10px">
            <?php
            echo form_button(array(
                "class" => "btn btn-primary btn-lg bggreen",
                "content" => "Cadastrar Anúncio",
                "type" => "submit"
            ));

            echo form_close();
            ?>    
        </div>

    </form>
    
</div>
</body>
</html>