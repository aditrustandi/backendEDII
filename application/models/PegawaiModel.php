<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiModel extends CI_Model {


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function ambilDataPegawai()
	{
        $data = $this->db->get('tbl_pegawai')->result_array();
        
        return $data;
    }
    
    public function TambahDataPegawai($nama, $nik, $jenis_kelamin, $tanggal_lahir)
    {
        $data = [
            'nama'=>$nama,
            'nik'=>$nik,
            'jenis_kelamin'=>$jenis_kelamin,
            'tanggal_lahir'=>$tanggal_lahir
        ];


        $this->db->set($data);

        if ($this->db->insert('tbl_pegawai')) {
            return true;
        }else{
            return false;
        }
    }

    public function EditDataPegawai($id, $nama, $nik, $jenis_kelamin, $tanggal_lahir)
    {
        $data = [
            'nama'=>$nama,
            'nik'=>$nik,
            'jenis_kelamin'=>$jenis_kelamin,
            'tanggal_lahir'=>$tanggal_lahir
        ];

        $this->db->set($data);

        $this->db->where('id', $id);
        if ($this->db->update('tbl_pegawai')) {
            return true;
        }else{
            return false;
        }
    }

    public function HapusDataPegawai($id)
    {

        $this->db->where('id', $id);
        if ($this->db->delete('tbl_pegawai')) {
            return true;
        }else{
            return false;
        }
    }
}
