<?php
    class M_brgRusak extends CI_Model
    {
        function tampilBarang(){
            $this->db->order_by('tgl_rusak','DESC');
            $this->db->where('status','Rusak');
            $hasil =  $this->db->get('daftar_barang');
            return $hasil->result();
        }    
        function repair($data,$id){
            $this->db->where('id',$id);
            return $this->db->update('daftar_barang',$data);
        }    
        function saveLog($data){
            return $this->db->insert('log_sistem',$data);
        }
        function upgrade($data,$id){
            $this->db->where('id',$id);
            return $this->db->update('daftar_barang',$data);
        }
    }
    
?>