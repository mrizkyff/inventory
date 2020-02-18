<?php
    class M_brgBaru extends CI_Model
    {
        function barangList(){
            $hasil=$this->db->query("SELECT * FROM brg_baru ORDER BY tanggal DESC");
            return $hasil->result();
        }
        public function updateFoto($data,$id){
			$this->db->where('id',$id);
			return $this->db->update('brg_baru',$data);
        }
        function saveLog($data){
            return $this->db->insert('log_sistem',$data);
        }

        function getBarang($id){
            $this->db->where('kodeBarang',$id);
            $hasil = $this->db->get('brg_baru');
            return $hasil->result();
        }

        function register($data){
            return $this->db->insert('brg_register',$data);
        }

        function delete($id){
            $this->db->where('id',$id);
            $hasil = $this->db->delete('brg_baru');
            return $hasil;
        }
    }

    
?>