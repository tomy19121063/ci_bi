<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_leasing extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('leasing')->result_array();
    }

    public function proses_tambah_data()
    {
        $data = [

            "nm_leasing" => $this->input->post('nm_leasing'),
            "nm_karyawan_leasing" => $this->input->post('nm_karyawan_leasing'),
            "tlp_leasing" => $this->input->post('tlp_leasing'),

        ];

        $this->db->insert('leasing', $data);
    }

     //query builder class untuk hapus data
        public function hapus_data($id_leasing)
        {
            $this->db->where('id_leasing', $id_leasing);
            $this->db->delete('leasing');
        }
 
        public function ambil_id_leasing($id_leasing)
        {
            return $this->db->get_where('leasing', ['id_leasing' => $id_leasing])
                ->row_array();
        }
    
        public function proses_edit_data_leasing()
    {
        $data = [
            "nm_leasing" => $this->input->post('nm_leasing'),
            "nm_karyawan_leasing" => $this->input->post('nm_karyawan_leasing'),
            "tlp_leasing" => $this->input->post('tlp_leasing'),
        ];

        $this->db->where('id_leasing', $this->input->post('id_leasing'));
        $this->db->update('leasing', $data);
    }
}