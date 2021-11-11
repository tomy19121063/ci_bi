<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('admin')->result_array();
    }

    public function proses_tambah_data()
    {
        $data = [

            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),

        ];

        $this->db->insert('admin', $data);
    }

     //query builder class untuk hapus data
        public function hapus_data($id_admin)
        {
            $this->db->where('id_admin', $id_admin);
            $this->db->delete('admin');
        }
 
        public function ambil_id_admin($id_admin)
        {
            return $this->db->get_where('admin', ['id_admin' => $id_admin])
                ->row_array();
        }
    
        public function proses_edit_data_admin()
    {
        $data = [
            
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            
        ];

        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('admin', $data);
    }
}