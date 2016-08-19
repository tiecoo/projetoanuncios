<?php $this->load->view("anuncios/head"); ?>
<div class="well">
    <h2>
        Anúncios Enviados
    </h2>
</div>

<div style="margin-top: 20px;">
    <table class="table table-striped table-bordered"  id="table_id" class="display">
        <thead>    
            <tr>
                <td class="col-sm-2"><b>Id.</b></td>
                <td class="col-sm-4"><b>Título</b></td>
                <td class="col-sm-2"><b>Criador</b></td>
                <td class="col-sm-2"><b>Data do envio</b></td>

            </tr>
        </thead>
        <?php foreach ($anun as $anun) : ?>
            <tr>
                <td><?= $anun["idProd"] ?></td>
                <td><?= $anun["titulo"] ?></td>
                <td><?= $anun["criador"] ?></td>
                <td><?php
                    $data = explode("-", $anun["data"]);
                    print $data[2] . "/" . $data[1] . "/" . $data[0];
                    ?></td>

            </tr>
<?php endforeach ?>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
</body>
</html>