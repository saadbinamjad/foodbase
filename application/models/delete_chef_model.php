<?php

	class Delete_chef_model extends CI_Model{
		function delete_model($id){
			$this->load->database();
           
            $this->db->where('id', $id);
            $this->db->delete('chef_table');
    
		}

}
		


?>
