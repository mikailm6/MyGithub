<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('crud_siswa'); //mengambil model crud_siswa
     }
 
    /*fungsi untuk mengirim data ke dalam database*/
     public function index() {
         $this->form_validation->set_rules('name', 'NAME','required');//inputan tidak boleh kosong
         $this->form_validation->set_rules('username', 'USERNAME','required');//sama
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');//sama
         $this->form_validation->set_rules('password','PASSWORD','required');//sama
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');//yang ini juga sama

         /*jika eror dalam mendaftar maka akan diredirect ke halaman daftar yang sama*/
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/v_register');

         /*jika berhasil maka data akan dikirimkan ke database lalu di redirect ke halaman v_success.php beserta dengan pesannya */
         }else{
            
             $data['nama']   =    $this->input->post('name');
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    $this->input->post('password');
             $this->crud_siswa->daftar($data); 
             $pesan['message'] =    "Pendaftaran berhasil";
             $this->load->view('account/v_success',$pesan);
         }
     }
 }