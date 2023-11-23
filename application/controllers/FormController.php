<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {

    public function index()
    {
        $this->load->view('form_data_diri');
    }

    public function simpan_data()
    {
        $this->load->model('FormData_model'); // Memuat model
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $umur = $this->input->post('umur');
    
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'umur' => $umur
        );
    
        $this->FormData_model->simpan_data_diri($data); // Memanggil fungsi model untuk menyimpan data ke database
    
        echo "Data diri telah disimpan ke database: <br>";
        echo "Nama: ".$nama."<br>";
        echo "Alamat: ".$alamat."<br>";
        echo "Umur: ".$umur."<br>";
    }
    
}
?>
