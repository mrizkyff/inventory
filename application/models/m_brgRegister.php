<?php
    class M_brgRegister extends CI_Model
    {
        function listBarang(){
            return $this->db->get("brg_register")->result();
        }

        function update($data, $id){
            $this->db->where('id',$id);
            return $this->db->update('brg_register',$data);
        }
        function saveLog($data){
            return $this->db->insert('log_sistem',$data);
        }
        
    }
    
?>