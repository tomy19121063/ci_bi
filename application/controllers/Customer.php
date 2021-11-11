<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function index()
    {
        $data['customer'] = $this->M_customer->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/dashboard_customer', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function tambah_data_customer()
    {
        $data['customer'] = $this->M_customer->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('tambah/tambah_data_customer', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
	
    public function proses_tambah_data()
    {
        $this->M_customer->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data customer baru berhasil Ditambahkan!
                                            </div>');
        redirect('Customer');
    }

    public function hapus_data($id_customer)
    {
        $this->M_customer->hapus_data($id_customer);
        redirect('Customer');
    }
	
    public function edit_data_customer($id_customer)
    {
        $data['customer'] = $this->M_customer->ambil_id_customer($id_customer);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('edit/edit_data_customer', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }

    public function proses_edit_data_customer($id_customer)
    {
        $this->M_customer->proses_edit_data_customer($id_customer);
        redirect('Customer');
    }

}