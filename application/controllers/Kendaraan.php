<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {

    public function index()
    {
        $data['kendaraan'] = $this->M_kendaraan->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/dashboard_kendaraan', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function tambah_data_kendaraan()
    {
        $data['kendaraan'] = $this->M_kendaraan->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('tambah/tambah_data_kendaraan', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
	
    public function proses_tambah_data()
    {
        $this->M_kendaraan->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data kendaraan baru berhasil Ditambahkan!
                                            </div>');
        redirect('Kendaraan');
    }

    public function hapus_data($id_kendaraan)
    {
        $this->M_kendaraan->hapus_data($id_kendaraan);
        redirect('Kendaraan');
    }
	
    public function edit_data_kendaraan($id_kendaraan)
    {
        $data['kendaraan'] = $this->M_kendaraan->ambil_id_kendaraan($id_kendaraan);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('edit/edit_data_kendaraan', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function proses_edit_data_kendaraan($id_kendaraan)
    {
        $this->M_kendaraan->proses_edit_data_kendaraan($id_kendaraan);
        redirect('Kendaraan');
    }
}