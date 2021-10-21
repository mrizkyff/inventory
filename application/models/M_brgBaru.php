<?php
    class M_brgBaru extends CI_Model
    {
        function barangList(){
            $this->db->order_by('tgl_baru','DESC');
            $this->db->where('status','Baru');
            return $this->db->get('daftar_barang')->result();
        }
        public function updateFoto($data,$id){
			$this->db->where('id',$id);
			return $this->db->update('daftar_barang',$data);
        }
        function saveLog($data){
            return $this->db->insert('log_sistem',$data);
        }

        function getBarang($id){
            $this->db->where('id',$id);
            $hasil = $this->db->get('daftar_barang');
            return $hasil->result();
        }

        function register($id,$data){
            $this->db->where('id',$id);
            return $this->db->update('daftar_barang',$data);
        }
        function kodePrimary($primary){
            $this->db->select($primary);
            return $this->db->get('setting_primary')->result();
        }
        function kodeJenis($jenis){
            $this->db->select($jenis);
            return $this->db->get('setting_jenis')->result();
        }
        function kodeBagian($bagian){
            $this->db->select($bagian);
            return $this->db->get('setting_bagian')->result();
        }
        function kodeSubBagian($subbag){
            $this->db->select($subbag);
            return $this->db->get('setting_subbag')->result();
        }

        
    }

    
?>