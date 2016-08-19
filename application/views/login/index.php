<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="<?= base_url("js/jquery-1.11.0.js") ?>" ></script>
        <script src="<?= base_url("js/bootstrap.js") ?>" ></script>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>"> 
        <script>$(".alert").alert('close')</script>
    </head>
    <body class="container" >

        <?php if ($this->session->flashdata("success")) { ?>
            <p class="alert alert-success alert-dismissible" data-dismiss="alert" role="alert"><?= $this->session->flashdata("success") ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></p>
        <?php } ?>    
        <?php if ($this->session->flashdata("danger")) { ?>
            <div class="alert alert-danger alert-dismissible" role="alert" >
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <p>
                    <?= $this->session->flashdata("danger") ?>
                </p>
            </div>
    <?php } ?>    

        <div class="container text-center">
                <div class="row">
                    <div class="col-md-offset-4 col-sm-4">
                        <div class="jumbotron">
                            <h4>LogIn</h4>
                            <?php
                            echo form_open("login/autenticar");
                            echo form_label("Nome:", "nome");
                            echo form_input(array(
                                "id" => "nome",
                                "name" => "nome",
                                "class" => "form-control"
                            ));

                            echo form_label("Senha:", "senha");
                            echo form_password(array(
                                "id" => "senha",
                                "name" => "senha",
                                "class" => "form-control"
                            ));

                            echo form_button(array(
                                "class" => "btn btn-primary btn-lg",
                                "style" => "margin-top: 30px",
                                "content" => "Logar",
                                "type" => "submit"
                            ));

                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>