<?php
class Buku_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_buku($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('data_buku');
            return $query->result_array();
        }

        $query = $this->db->get_where('data_buku', array('id' => $id));
        return $query->row_array();
    }

    public function set_buku($data) {
        return $this->db->insert('data_buku', $data);
    }

    public function update_buku($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('data_buku', $data);
    }

    public function delete_buku($id) {
        $this->db->where('id', $id);
        return $this->db->delete('data_buku');
    }
}
