<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormData_model extends CI_Model {

    public function simpan_data_diri($data)
    {
        // Simpan data ke database
        $this->db->insert('form', $data);
    }
}
?>
