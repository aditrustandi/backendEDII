<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: *");

        $this->load->model('PegawaiModel');
    }

	public function DataPegawai()
	{
        $data = $this->PegawaiModel->ambilDataPegawai();
        
        echo json_encode($data);
    }
    
    public function TambahDataPegawai()
	{
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tanggal_lahir = $this->input->post('tanggal_lahir');

        $data = $this->PegawaiModel->TambahDataPegawai($nama, $nik, $jenis_kelamin, $tanggal_lahir);

        echo json_encode($data);
    }
    
    public function EditDataPegawai($id)
	{
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tanggal_lahir = $this->input->post('tanggal_lahir');

        $data = $this->PegawaiModel->EditDataPegawai($id, $nama, $nik, $jenis_kelamin, $tanggal_lahir);
        
        echo json_encode($data);
    }
    
    public function HapusDataPegawai($id)
	{
        $data = $this->PegawaiModel->HapusDataPegawai($id);
        
        echo json_encode($data);
	}
}
