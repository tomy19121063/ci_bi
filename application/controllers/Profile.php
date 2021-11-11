<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index()
    {
        $data['admin'] = $this->M_admin->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/dashboard_profile', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
}