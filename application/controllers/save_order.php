<?php
class Update_burger_data extends CI_Controller{

	function update(){
        $burger_id = $this->uri->segment(3);
        $this->load->model('update_burger_model');
        $result= $this->update_burger_model->get_burger_details($burger_id);
        $data['result']=$result;
        $this->load->view('update_burger_view',$data);
    }
    
    function update_edit(){

        $this->load->model('update_burger_model');
        $this->update_burger_model->update_burger_id();
        $this->load->view('success');
     }    
}

?>

