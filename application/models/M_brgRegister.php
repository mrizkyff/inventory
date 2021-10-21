<?php
    class M_brgRegister extends CI_Model
    {
        function listBarang(){
            $this->db->order_by('tgl_register','DESC');
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
        function getKerusakan($id){
            $this->db->where('id',$id);
            $this->db->select('kerusakan');
            return $this->db->get('daftar_barang')->result();
        }
        function getBarangById($id){
            $this->db->where('id',$id);
            return $this->db->get('daftar_barang')->result();
        }
        function getFieldQr(){
            $this->db->where('id','1');
            return $this->db->get('setting_qr')->result();
        }
        function getFieldBarcode(){
            $this->db->where('id','1');
            return $this->db->get('setting_barcode')->result();
        }

    }
    
?>