<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="<?= base_url("js/jquery-1.11.0.js") ?>" ></script>
        <script src="<?= base_url("js/bootstrap.js") ?>" ></script>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>"> 
        <link rel="stylesheet" href="<?= base_url("css/estoque.css") ?>"> 
        <script>$(".alert").alert('close')</script>   
        <link rel="stylesheet" href="<?= base_url("css/simple-sidebar.css") ?>">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js" ></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

    </head>
    <body>


        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand" style="margin-top: 30px;">
                        <img src="http://www.mfrural.com.br/image/logo.png" />
                    </li>
                    <li class="sidebar-brand" style="margin-top: 30px;">
                        <a href="#"><?= anchor('anuncios/index', 'Lista dos Anúncios'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?= anchor('anuncios/prepararInserir', 'Cadastrar Anúncio'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?= anchor('anuncios/todos', 'Todos anúncios e datas'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?= anchor('anuncios/carregaEditar', 'Editar Anúncios'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?= anchor('anuncios/enviado', 'Anúncios Enviados'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?= anchor('anuncios/preparaRemover', 'Remover'); ?></a>
                    </li>

                    <li>
                        <a href="#"><?= anchor('login/logout', 'Sair'); ?></a>
                    </li>
                    <?php if ($this->session->userdata("usuarioAdmin")) { ?>
                        <li>
                            <a href="#"><?= anchor('login/preparaCadastrar', 'Cadastrar novo funcionário'); ?></a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <?php if ($this->session->flashdata("success")) { ?>
                <p class="alert alert-success alert-dismissible" role="alert"><?= $this->session->flashdata("success") ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></p>
            <?php } ?>    
            <?php if ($this->session->flashdata("danger")) { ?>
                <p class="alert alert-danger alert-dismissible" role="alert"><?= $this->session->flashdata("danger") ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></p>
            <?php } ?>  
