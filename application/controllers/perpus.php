<?php defined('BASEPATH') or exit('No direct script access allowed');

class perpus extends CI_Controller
{
 public function __construct()
{
parent::__construct();

 $this->load->library('buku');
 }
 function index()
{
 $this->buku->Perpustakaan('120','300','100','200'); echo "<br/>"; 
}
}