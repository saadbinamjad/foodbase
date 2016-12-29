<?php
class Update_data extends CI_Controller{

	function update(){
        $id = $this->uri->segment(3);
        $this->load->model('update_model');
        $result= $this->update_model->get_employee_details($id);
        $data['result']=$result;
        $this->load->view('update_view',$data);
    }
    
    function update_edit(){

        $this->load->model('update_model');
        $this->update_model->update_employee_id();
        // $this->load->view('update_view_edit');
     }    
}

?>

