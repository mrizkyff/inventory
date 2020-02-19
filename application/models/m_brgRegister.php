<?php
    class M_brgRegister extends CI_Model
    {
        function listBarang(){
            $this->db->where('status','Terdaftar');
            return $this->db->get('daftar_barang')->result();
        }

        function update($data, $id){
            $this->db->where('id',$id);
            return $this->db->update('daftar_barang',$data);
        }
        function saveLog($data){
            return $this->db->insert('log_sistem',$data);
        }
        function rusak($id, $data){
            $this->db->where('id',$id);
            return $this->db->update('daftar_barang',$data);
        }
        
    }
    
?>