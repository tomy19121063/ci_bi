<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kendaraan extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('kendaraan')->result_array();
    }

    public function proses_tambah_data()
    {
        $data = [

            "nm_kategori" => $this->input->post('nm_kategori'),
            "nopol" => $this->input->post('nopol'),
            "tahun" => $this->input->post('tahun'),
            "merk" => $this->input->post('merk'),
            "model" => $this->input->post('model'),
            "tipe" => $this->input->post('tipe'),
            "km" => $this->input->post('km'),
            "warna" => $this->input->post('warna'),
            "bbm" => $this->input->post('bbm'),
            "transmisi" => $this->input->post('transmisi'),
            "harga_beli" => $this->input->post('harga_beli'),
            "harga_jual" => $this->input->post('harga_jual'),
            "stok" => $this->input->post('stok'),
            
        ];

        $this->db->insert('kendaraan', $data);
    }
     //query builder class untuk hapus data
    public function hapus_data($id_kendaraan)
    {
        $this->db->where('id_kendaraan', $id_kendaraan);
        $this->db->delete('kendaraan');
    }

    public function ambil_id_kendaraan($id_kendaraan)
    {
        return $this->db->get_where('kendaraan', ['id_kendaraan' => $id_kendaraan])
            ->row_array();
    }

    public function proses_edit_data_kendaraan()
    {
        $data = [
            "nm_kategori" => $this->input->post('nm_kategori'),
            "nopol" => $this->input->post('nopol'),
            "tahun" => $this->input->post('tahun'),
            "merk" => $this->input->post('merk'),
            "model" => $this->input->post('model'),
            "tipe" => $this->input->post('tipe'),
            "km" => $this->input->post('km'),
            "warna" => $this->input->post('warna'),
            "bbm" => $this->input->post('bbm'),
            "transmisi" => $this->input->post('transmisi'),
            "harga_beli" => $this->input->post('harga_beli'),
            "harga_jual" => $this->input->post('harga_jual'),
            "stok" => $this->input->post('stok'),
        ];

        $this->db->where('id_kendaraan', $this->input->post('id_kendaraan'));
        $this->db->update('kendaraan', $data);
    }
}