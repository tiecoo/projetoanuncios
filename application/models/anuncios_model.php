<?php

class Anuncios_model extends CI_Model {

    public function salvaAnun($anun) {
        $this->db->insert("anuncios", $anun);
    }

    public function buscaAnun() {
        return $this->db->get("anuncios")->result_array();
    }

    public function buscaAnunHoje() {
        $this->db->where('data', date("Y-m-d"));
        $this->db->where('enviado', 0);
        return $this->db->get("anuncios")->result_array();
    }

    public function buscaAnunQtde($dia) {
        $this->db->where('data', $dia);
        $this->db->where('enviado', 0);
        $qtde = $this->db->get("anuncios")->num_rows();

        return $qtde;
    }

    public function buscaAnunRemover() {
        $anun = $this->db->get("anuncios")->result_array();
        return $anun;
    }

    public function buscaAnunEditar() {
        $anun = $this->db->get("anuncios")->result_array();
        return $anun;
    }

    public function buscaAnunPag($argOrderBy = 'id') {
        $this->db->order_by($argOrderBy, 'desc');
        $results = $this->db->get_where("anuncios", array("enviado" => 0));


        return $results->result_array();
    }

    public function count_buscaAnuncios() {
        $this->db->select('COUNT(1) as total');
        $results = $this->db->get("anuncios");
        $retorno = $results->row();
        return $retorno->total;
    }

    public function deleteProduto($id) {
        $this->db->delete('anuncios', array('id' => $id));
    }

    public function editarAnun($id, $anun) {
        $this->db->update('anuncios', $anun, array('id' => $id));
    }

    public function buscaAnunPorId($id) {
        return $this->db->get_where('anuncios', array('id' => $id));
    }

    public function enviado() {
        $this->db->where('enviado', 1);
              
        $results = $this->db->get('anuncios')->result_array();
        return $results;
    }
    public function enviar($id){
        $this->db->where('id', $id);
        $this->db->update('anuncios', array('enviado' => 1));
        
    }
    
    public function somarTodos(){
        return $this->db->count_all('anuncios');
    }
    
    public function buscarTodos($_limit = 20, $_start = 0){
        $this->db->limit($_limit, $_start);
        return $this->db->get('anuncios')->result();
    }
}
