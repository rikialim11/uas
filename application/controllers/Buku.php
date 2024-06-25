<?php
class Buku extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['buku'] = $this->Buku_model->get_buku();
        $this->load->view('buku/index', $data);
    }

    public function view($id) {
        $data['buku'] = $this->Buku_model->get_buku($id);
        $this->load->view('buku/view', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required');
        $this->form_validation->set_rules('isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('sekilas_isi', 'Sekilas Isi', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('buku/create');
        } else {
            $data = array(
                'kode_buku' => $this->input->post('kode_buku'),
                'isbn' => $this->input->post('isbn'),
                'judul_buku' => $this->input->post('judul_buku'),
                'pengarang' => $this->input->post('pengarang'),
                'sekilas_isi' => $this->input->post('sekilas_isi'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'stok' => $this->input->post('stok'),
                'foto' => $this->input->post('foto')
            );

            $this->Buku_model->set_buku($data);
            redirect('/buku');
        }
    }

    public function edit($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required');
        $this->form_validation->set_rules('isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('sekilas_isi', 'Sekilas Isi', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['buku'] = $this->Buku_model->get_buku($id);
            $this->load->view('buku/edit', $data);
        } else {
            $data = array(
                'kode_buku' => $this->input->post('kode_buku'),
                'isbn' => $this->input->post('isbn'),
                'judul_buku' => $this->input->post('judul_buku'),
                'pengarang' => $this->input->post('pengarang'),
                'sekilas_isi' => $this->input->post('sekilas_isi'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'stok' => $this->input->post('stok'),
                'foto' => $this->input->post('foto')
            );

            $this->Buku_model->update_buku($id, $data);
            redirect('/buku');
        }
    }

    public function delete($id) {
        $this->Buku_model->delete_buku($id);
        redirect('/buku');
    }
}
