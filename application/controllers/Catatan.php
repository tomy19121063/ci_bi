<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catatan extends CI_Controller {

    public function index()
    {
        $data['catatan'] = $this->M_catatan->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/dashboard_catatan', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function tambah_data_catatan()
    {
        $data['catatan'] = $this->M_catatan->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('tambah/tambah_data_catatan', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
	
    public function proses_tambah_data()
    {
        $this->M_catatan->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data catatan baru berhasil Ditambahkan!
                                            </div>');
        redirect('Catatan');
    }

    public function hapus_data($id_catatan)
    {
        $this->M_catatan->hapus_data($id_catatan);
        redirect('Catatan');
    }
	
    public function edit_data_catatan($id_catatan)
    {
        $data['catatan'] = $this->M_catatan->ambil_id_catatan($id_catatan);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('edit/edit_data_catatan', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function proses_edit_data_catatan($id_catatan)
    {
        $this->M_catatan->proses_edit_data_catatan($id_catatan);
        redirect('Catatan');
    }

}