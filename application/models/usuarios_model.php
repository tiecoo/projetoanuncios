<?php

class Usuarios_model extends CI_Model {

    public function salva($usuario) {
        $this->db->insert("usuario", $usuario);
    }
    
    public function buscaNomeeSenha($nome, $senha){
        $this->db->where("nome", $nome);
        $this->db->where("senha", $senha);
        $logado = $this->db->get("usuario")->row_array();
        return $logado;
    }
}
