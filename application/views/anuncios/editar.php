<?php $this->load->view("anuncios/head"); ?>

<div class="well-sm bggreen">
    <h2 class="white esqcima">
        Editar Anuncio
    </h2>
</div>

<div id="form">
    <?php
    echo form_open("anuncios/editar?id=$id");
    ?>
    <form>
        <div class="col-sm-3 hidden">
            <?php
            echo form_label("Id:", "id");
            echo form_input(array(
                "value" => $id,
                "id" => "id",
                "name" => "id",
                "class" => "form-control",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Criou:", "criador");
            echo form_input(array(
                "value" => $criador,
                "id" => "criador",
                "name" => "criador",
                "class" => "form-control",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">

            <?php
            echo form_label("ID Produto:", "idProd");
            echo form_input(array(
                "value" => $idProd,
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
                "value" => $titulo,
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
                "value" => $data,
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
                "class" => "btn btn-primary btn-lg",
                "content" => "Editar Produto",
                "type" => "submit"
            ));

            echo form_close();
            ?>    
        </div>
    </form>
</div>
</body>
</html>


