<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); 

class Welcome extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('admin_header', $data);
      $this->load->view('welcome_message', $data);
    $this->load->view('home_footer');
   
     
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   $this->load->database();
   $this->db->empty_table('order'); 
   session_destroy();
   redirect('', 'refresh');
 }
 
}
 
?>