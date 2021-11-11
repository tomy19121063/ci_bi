<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('customer')->result_array();
    }

    public function proses_tambah_data()
    {
        $data = [

            "nm_customer" => $this->input->post('nm_customer'),
            "tlp_customer" => $this->input->post('tlp_customer'),

        ];

        $this->db->insert('customer', $data);
    }

     //query builder class untuk hapus data
        public function hapus_data($id_customer)
        {
            $this->db->where('id_customer', $id_customer);
            $this->db->delete('customer');
        }
 
        public function ambil_id_customer($id_customer)
        {
            return $this->db->get_where('customer', ['id_customer' => $id_customer])
                ->row_array();
        }
    
        public function proses_edit_data_customer()
    {
        $data = [
            "nm_customer" => $this->input->post('nm_customer'),
            "tlp_customer" => $this->input->post('tlp_customer'),
        ];

        $this->db->where('id_customer', $this->input->post('id_customer'));
        $this->db->update('customer', $data);
    }
}