<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('[admin]')->result_array();
    }
}