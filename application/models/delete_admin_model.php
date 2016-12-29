<?php

	class Delete_admin_model extends CI_Model{
		function delete_model($id){
			$this->load->database();
           
            $this->db->where('id', $id);
            $this->db->delete('admin');
    
		}

}
		


?>
