<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leasing extends CI_Controller {

    public function index()
    {
        $data['leasing'] = $this->M_leasing->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/dashboard_leasing', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function tambah_data_leasing()
    {
        $data['leasing'] = $this->M_leasing->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('tambah/tambah_data_leasing', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
	
    public function proses_tambah_data()
    {
        $this->M_leasing->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data leasing baru berhasil Ditambahkan!
                                            </div>');
        redirect('Leasing');
    }

    public function hapus_data($id_leasing)
    {
        $this->M_leasing->hapus_data($id_leasing);
        redirect('Leasing');
    }
	
    public function edit_data_leasing($id_leasing)
    {
        $data['leasing'] = $this->M_leasing->ambil_id_leasing($id_leasing);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('edit/edit_data_leasing', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function proses_edit_data_leasing($id_leasing)
    {
        $this->M_leasing->proses_edit_data_leasing($id_leasing);
        redirect('Leasing');
    }

}