<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('excel_export_model');
 }

public function index() {
$data['invoice'] = $this->model_invoice->tampil_data();
 // $data = array( 'title' => 'Data invoice',
$this->excel_export_model->listing();
$this->load->view('template_admin/header');
$this->load->view('template_admin/sidebar');
$this->load->view('admin/invoice',$data);
$this->load->view('template_admin/footer');
 }

public function export_excel(){

 // $data = array( 'title' => 'Laporan Excel',
   $data['invoice'] = $this->model_invoice->tampil_data();
 $this->excel_export_model->listing();
 $this->load->view('admin/invoice_excel',$data);
 }

}
