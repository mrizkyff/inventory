<?php
    class M_setting extends CI_Model
    {
        function kodeJenis(){
            return $this->db->get('setting_jenis')->result();
        }
        function kodeBagian(){
            return $this->db->get('setting_bagian')->result();
        }
        function kodeSubBagian(){
            return $this->db->get('setting_subbag')->result();
        }
        function updateJenis($data){
            $this->db->where('id','1');
            return $this->db->update('setting_jenis',$data);
        }
        function updateBagian($data){
            $this->db->where('id','1');
            return $this->db->update('setting_bagian',$data);
        }
        function updateSubbag($data){
            $this->db->where('id','1');
            return $this->db->update('setting_subbag',$data);
        }
    }
    
?>