<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->model("estoque_model");
        $this->load->model("usuarios_model");
        $this->load->helper(array("currency", "form"));
       
    }

    public function index() {
        $this->load->view("login/index");
    }

    public function autenticar() {
        $nome = strtolower($this->input->post("nome"));
        $senha = md5($this->input->post("senha"));
        $logado = $this->usuarios_model->buscaNomeeSenha($nome, $senha);
        if ($logado) {
            $this->session->set_userdata("usuarioId", $logado["id"]);
            $this->session->set_userdata("usuarioNome", $logado["nome"]);
            $this->session->set_userdata("usuarioEmail", $logado["email"]);
            $this->session->set_userdata("usuarioAdmin", $logado["admin"]);
            redirect("anuncios/index");
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha incorreto");
            redirect("/");
        }
    }

    public function logout() {
        $this->session->unset_userdata("usuarioId");
        $this->session->unset_userdata("usuarioNome");
        $this->session->unset_userdata("usuarioEmail");
        $this->session->unset_userdata("usuarioAdmin");
        $this->session->set_flashdata("success", "Deslogado com sucesso");
        redirect("/");
    }

    public function preparaCadastrar() {
        $this->load->view("usuarios/cadastrar");
    }

    public function cadastrar() {
        $usuario = array(
            "nome" => strtolower($this->input->post("name")),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha")),
            "admin" => $this->input->post("validado")
        );

        $this->usuarios_model->salva($usuario);
        redirect("anuncios/index");
    }

}
