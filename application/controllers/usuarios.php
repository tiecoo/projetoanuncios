<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
       if (!$this->session->userdata('usuarioId')) {
            redirect("login/index");
            exit();
        } 
    }

    //MUDAR NOME PARA PREPARAR INSERIR

    public function novo() {//MUDAR NOME PARA INSERIR
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha"))
        );
        $this->load->model("usuarios_model");
        $this->usuarios_model->salva($usuario);
        $this->load->view("usuarios/novo");
    }

}
