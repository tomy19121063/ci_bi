<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    

    public function index()
    {
        $data['admin'] = $this->M_admin->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/dashboard_admin', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
	
    public function tambah_data_admin()
    {
        $data['admin'] = $this->M_admin->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('tambah/tambah_data_admin', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
	
    public function proses_tambah_data()
    {
        $this->M_admin->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data admin baru berhasil Ditambahkan!
                                            </div>');
        redirect('Admin');
    }

    public function hapus_data($id_admin)
    {
        $this->M_admin->hapus_data($id_admin);
        redirect('Admin');
    }
	
    public function edit_data_admin($id_admin)
    {
        $data['admin'] = $this->M_admin->ambil_id_admin($id_admin);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('edit/edit_data_admin', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function proses_edit_data_admin($id_admin)
    {
        $this->M_admin->proses_edit_data_admin($id_admin);
        redirect('Admin');
    }
}