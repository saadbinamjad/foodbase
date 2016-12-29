<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url');
    }
  	//if index loaded,
	
  public function index() {
    //load the view/image_view.php
		$this->load->view('image_view');
	}
			//if watermark,
	public function putwatermark(){
   
    $config['image_library'] = 'gd2';
    $config['source_image']  = './uploads/gaga.jpg';
    $config['new_image']  = './uploads/new_gaga.jpg';
    $config['width']	 = $this->input->post('width');
    $config['height']	= $this->input->post('height');
    $this->image_lib->initialize($config); 
    $this->image_lib->resize();
	
		//load the view/image.php
		$this->load->view('image_view');
	
	}

}

?>
