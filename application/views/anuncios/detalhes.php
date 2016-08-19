<?php $this->load->view("estoque/head"); ?>

<div class="well">
    <h2 class="">
        Ver Log
    </h2>
</div>

<div id="form">
    <form>
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
            echo form_label("Fornecedor:", "fornecedor");
            echo form_input(array(
                "value" => $fornecedor,
                "id" => "fornecedor",
                "name" => "fornecedor",
                "class" => "form-control",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">

            <?php
            echo form_label("Nota Fiscal:", "danfe");
            echo form_input(array(
                "value" => $danfe,
                "id" => "danfe",
                "name" => "danfe",
                "class" => "form-control",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Descrição:", "descricao");
            echo form_input(array(
                "value" => $descricao,
                "id" => "descricao",
                "name" => "descricao",
                "class" => "form-control",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Quantidade:", "quantidade");
            echo form_input(array(
                "value" => $quantidade,
                "id" => "quantidade",
                "name" => "quantidade",
                "class" => "form-control",
                "type" => "number",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Unidade:", "unidade");
            echo form_input(array(
                "value" => $unidade,
                "id" => "unidade",
                "name" => "unidade",
                "class" => "form-control",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Valor:", "valor");
            echo form_input(array(
                "value" => $valor,
                "id" => "valor",
                "name" => "valor",
                "class" => "form-control",
                "type" => "number",
                "step" => "any",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("ICMS:", "icms");
            echo form_input(array(
                "value" => $icms,
                "id" => "icms",
                "name" => "icms",
                "class" => "form-control",
                "type" => "number",
                "step" => "any",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Substituição Tributária:", "st");
            echo form_input(array(
                "value" => $st,
                "id" => "st",
                "name" => "st",
                "class" => "form-control",
                "type" => "number",
                "step" => "any",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("IPI:", "ipi");
            echo form_input(array(
                "value" => $ipi,
                "id" => "ipi",
                "name" => "ipi",
                "class" => "form-control",
                "type" => "number",
                "step" => "any",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Frete:", "frete");
            echo form_input(array(
                "value" => $frete,
                "id" => "frete",
                "name" => "frete",
                "class" => "form-control",
                "type" => "number",
                "step" => "any",
                "disabled" => false
            ));
            ?>
        </div>
        <div class="col-sm-3">
            <?php
            echo form_label("Criado:", "criado");
            echo form_input(array(
                "value" => $criado,
                "id" => "criado",
                "name" => "criado",
                "class" => "form-control",
                "type" => "text",
                "step" => "any",
                "disabled" => false
            ));
            ?>
        </div>
            <div class="col-sm-3">
                <?php
                echo form_label("Validar:", "validado");
                echo form_checkbox(array(
                    "value" => 1,
                    "id" => "validado",
                    "name" => "validado",
                    "class" => "form-control",
                    "type" => "checkbox",
                    "checked"=> $validado,
                "disabled" => false
                ));
                ?>
            </div>
        <div class="col-sm-3" style="margin-top: 10px">
                <?= anchor('estoque/visualizarLogs', 'Voltar aos Logs', array("class" => "btn btn-primary bggreen")); ?>
        </div>
    </form>
</div>
</body>
</html>


