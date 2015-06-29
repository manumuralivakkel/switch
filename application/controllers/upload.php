<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload extends CI_Controller {
  public function index() {
    // setting up validation.
    $this->form_validation->set_rules('userfile', 'User File', 'required|callback_file_upload');
    if ($this->form_validation->run() == false){
      $this->load->view('upload');
    }
    else {
      // success block
      if(!empty($this->upload_data['profile_image'])){
        if(!empty($this->upload_data['profile_image']['file_name'])){
           // user this file name to insert db and do your stuff.
           echo $this->upload_data['profile_image']['orig_name'];
        }
      }     
    }
  }
  public function file_upload(){
    $this->load->library('upload');
    // required configuration.
    $config['upload_path']   = 'assets/uploads/';
    $config['allowed_types'] = 'jpg|jpeg|gif|png';
    $config['max_size']      = 1024*2; //2MB
    $this->upload->initialize($config); 
    if(!$this->upload->do_upload('userfile')){
      $this->form_validation->set_message('file_upload',str_replace(array('<p>', '</p>'),'', $this->upload->display_errors())); 
      return false;
    } 
    else {      
      $this->upload_data['userfile'] = $this->upload->data();  
      return true;
    }     
  }
}