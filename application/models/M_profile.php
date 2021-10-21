<?php
    class M_profile extends CI_Model
    {
        function updatePwd($where,$data){
            $this->db->where($where);
            return $this->db->update('privilege',$data);
        }
    }
    
?>