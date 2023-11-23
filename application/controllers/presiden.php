<?php
defined('BASEPATH') or exit('No direct script access allowed');

class presiden extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('presiden_model');
      

    }

    function index()
    {
        $data['judul'] = "Presiden";
        $data['presiden'] = $this->presiden_model->get();
        $this->load->view("layout/header", $data); 
        $this->load->view("presiden/vw_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Prodi";
        $data['prodi']= $this->Presiden_model->get(); 
        $this->load->view("layout/header", $data);
        $this->load->view("presiden/vw_tambah_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman ubah Mahasiswa";
        $data['prodi'] = $this->presiden_model->get();
        $data['mahasiswa']= $this -> presiden_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_ubah_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function detail($id)
{
    $data['judul'] = "Halaman Detail Prodi";
    $data['mahasiswa'] = $this->presiden_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_detail_prodi", $data);
    $this->load->view("layout/footer");
}


    

    public function hapus($id)
    {
        $this->presiden_model->delete($id);
        redirect('Presiden');
    }

    public function upload()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwyat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'umur' => $this->input->post('umur'),
            
        ];

        $this->presiden_model->insert($data); 
        redirect('Prodi');
    }


    public function update()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwyat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'umur' => $this->input->post('umur'),
           
        ];
        $id = $this->input->post('id');
        $this->presiden_model->update(['id' => $id],$data); 
        redirect('presiden');
    }


}
