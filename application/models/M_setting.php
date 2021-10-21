<?php
    class M_setting extends CI_Model
    {
        function kodePrimary(){
            return $this->db->get('setting_primary')->result();
        }
        function kodeJenis(){
            return $this->db->get('setting_jenis')->result();
        }
        function kodeBagian(){
            return $this->db->get('setting_bagian')->result();
        }
        function kodeSubBagian(){
            return $this->db->get('setting_subbag')->result();
        }
        function updatePrimary($data){
            return $this->db->update('setting_primary',$data);
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


        function saveLayout($id, $data, $table){
            $this->db->where('id',$id);
            return $this->db->update($table,$data);
        }
        function getLayoutQr(){
            $this->db->where('id','1');
            return $this->db->get('setting_qr')->result();
        }
        function getLayoutBarcode(){
            $this->db->where('id','1');
            return $this->db->get('setting_barcode')->result();
        }
    }
    
?>