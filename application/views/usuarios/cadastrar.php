<?php $this->load->view("anuncios/head"); ?>

<div class="well">
    <h2 class="">
        Cadastrar Funcionário
    </h2>
</div>

<div id="form">
    <?php
    echo form_open("login/cadastrar");
    ?>
    <form>
        <div class="col-sm-3">
            <?php
            echo form_label("Nome:", "name");
            echo form_input(array(
                "id" => "name",
                "name" => "name",
                "class" => "form-control"
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Email:", "email");
            echo form_input(array(
                "id" => "email",
                "name" => "email",
                "class" => "form-control"
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Senha:", "senha");
            echo form_input(array(
                "type" => "password",
                "id" => "senha",
                "name" => "senha",
                "class" => "form-control"
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Administrador:", "validado");
            echo form_checkbox(array(
                "value" => 1,
                "id" => "validado",
                "name" => "validado",
                "class" => "form-control",
                "type" => "checkbox"
            ));
            ?>
        </div>
        <div class="col-sm-3" style="margin-top: 10px">
            <?php
            echo form_button(array(
                "class" => "btn btn-primary btn-lg bggreen",
                "content" => "Cadastrar funcionario",
                "type" => "submit"
            ));

            echo form_close();
            ?>    
        </div>
    </form>
</div>
</body>
</html>


