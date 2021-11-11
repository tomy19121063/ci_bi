<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/dashboard');
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
	
    public function logout()
    {
        $this->session->session_destroy();
        redirect('home/logout');
    }

}
