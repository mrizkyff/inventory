<?php
    class M_login extends CI_Model
    {
        function cek_login($table,$where){
            return $this->db->get_where($table,$where);
        }
        function cariId($data){
            $this->db->where($data);
            $this->db->select('id');
            return $this->db->get('privilege');
        }
    }
    
?>