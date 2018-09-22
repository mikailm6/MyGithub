 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
 
    /*fungsi untuk login yang dambil dari libraries/simple_login.php*/
     public function index() {
         $valid = $this->form_validation;
         $username = $this->input->post('username');//inputan dari user
         $password = $this->input->post('password');//inputan dari user
         $valid->set_rules('username','Username','required');//akan memunculkan popup jika username tidak diisi
         $valid->set_rules('password','Password','required');//sama dengan komentar di atas, fungsinya diambil dari simple_login.php
 
         //jika username dan password benar makaa akan di redirect ke halaman dashboard dan membuat session baru
         if($valid->run()) {
             $this->simple_login->login($username,$password, base_url('beranda'), base_url('login'));

         }
         $this->load->view('account/v_login');//jika gagal login maka akan diredirect ke hlaman login yang sama
     }
 
    /*fungsi logout yang diambil dari simple_login.php*/
     public function logout(){
         $this->simple_login->logout();
     }        
 }