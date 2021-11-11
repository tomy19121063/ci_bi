<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_catatan extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('catatan')->result_array();
    }

    public function proses_tambah_data()
    {
        $data = [

            "nm_catatan" => $this->input->post('nm_catatan'),
            "deskripsi" => $this->input->post('deskripsi'),
            "dana" => $this->input->post('dana'),
            "nm_pemesan" => $this->input->post('nm_pemesan'),
            "tlp_pemesan" => $this->input->post('tlp_pemesan'),

        ];

        $this->db->insert('catatan', $data);
    }

     //query builder class untuk hapus data
        public function hapus_data($id_catatan)
        {
            $this->db->where('id_catatan', $id_catatan);
            $this->db->delete('catatan');
        }
 
        public function ambil_id_catatan($id_catatan)
        {
            return $this->db->get_where('catatan', ['id_catatan' => $id_catatan])
                ->row_array();
        }
    
        public function proses_edit_data_catatan()
    {
        $data = [
            
            "nm_catatan" => $this->input->post('nm_catatan'),
            "deskripsi" => $this->input->post('deskripsi'),
            "dana" => $this->input->post('dana'),
            "nm_pemesan" => $this->input->post('nm_pemesan'),
            "tlp_pemesan" => $this->input->post('tlp_pemesan'),

        ];

        $this->db->where('id_catatan', $this->input->post('id_catatan'));
        $this->db->update('catatan', $data);
    }
}