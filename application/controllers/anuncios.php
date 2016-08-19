<?php

class Anuncios extends CI_Controller {

    private $regByPage = 20;

    public function __construct() {
        parent::__construct();
        $this->load->model("anuncios_model");
        $this->load->helper(array("currency", "form"));
        $this->load->helper('date');        
        $this->load->helper('pagination');
        if (!$this->session->userdata('usuarioId')) {
            redirect("login/index");
        }
    }

    public function index() {
        $anuncios = $this->anuncios_model->buscaAnunHoje();
        $anun = array("anun" => $anuncios);
        $this->load->view("anuncios/index", $anun);
    }

    public function inserir() {
        $anun = array("idProd" => $this->input->post("idProd"),
            "titulo" => $this->input->post("titulo"),
            "data" => $this->input->post("data"),
            "criador" => $this->session->userdata("usuarioNome")
        );
        $this->db->set('enviado', 0, FALSE);
        $dia = $this->input->post("data");
        $qtde = $this->anuncios_model->buscaAnunQtde($dia);

        if ($dia < date("Y-m-d")) {
            $this->session->set_flashdata("danger", "Você não pode configurar um anuncio com uma data que ja passou!");
            redirect("anuncios/prepararInserir");
        }
        if ($qtde < 10) {
            $this->anuncios_model->salvaAnun($anun);
            $this->session->set_flashdata("success", "Anuncio salvo com sucesso!");
            redirect("anuncios/prepararInserir");
        } else {
            $this->session->set_flashdata("danger", "Quantidade de mensagens diárias foi atingido!");
            redirect("anuncios/prepararInserir");
        }
    }

    public function prepararInserir() { //MUDAR NOME PARA PREPARAR INSERIR
        $this->load->view("anuncios/inserir");
    }

    public function preparaRemover() {
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $array = array(
            'anuncios' => $this->anuncios_model->buscarTodos(20, $page),
            'paginacao' => createPaginate('/anuncios/preparaRemover/', $this->anuncios_model->somarTodos())
        );

        $this->load->view("anuncios/remover", $array);
    }

    public function remover() {
        $id = $this->input->get("id", TRUE);
        $this->anuncios_model->deleteProduto($id);
        redirect("anuncios/preparaRemover");
    }

    public function carregaEditar() {
        $anuncios = $this->anuncios_model->buscaAnunEditar();
        $anun = array("anun" => $anuncios);
        $this->load->view("anuncios/modificar", $anun);
    }

    public function preparaEditar() {
        $id = $this->input->get('id', TRUE);
        $anun = $this->anuncios_model->buscaAnunPorId($id)->row();
        $this->load->view("anuncios/editar", $anun);
    }

    public function editar() {
        $anun = array("idProd" => $this->input->post("idProd"),
            "titulo" => $this->input->post("titulo"),
            "data" => $this->input->post("data")
        );
        $id = $this->input->get("id", TRUE);
        $this->anuncios_model->editarAnun($id, $anun);
        redirect("anuncios/carregaEditar");
    }

    public function todos() {
        ;

        $list = $this->anuncios_model->buscaAnunPag('id');

        $retorno = array("anun" => $list);
        $this->load->view("anuncios/todos", $retorno);


        //$anuncios = $this->anuncios_model->buscaAnun();
        //$anun = array("anun" => $anuncios);
        //$this->load->view("anuncios/todos", $anun);
    }

    public function enviado() {
        $anuncios = $this->anuncios_model->enviado();
        $retorno = array("anun" => $anuncios);

        $this->load->view("anuncios/enviados", $retorno);
    }

    public function enviar() {
        $id = $this->input->get("id");
        $this->anuncios_model->enviar($id);

        redirect('anuncios/index');
    }

    public function limparPesquisaEnviados() {
        $this->session->unset_userdata('search');
        redirect(base_url() . 'index.php/anuncios/enviado');
    }

}
