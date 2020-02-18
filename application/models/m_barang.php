<?php
class M_barang extends CI_Model
{
    function cek_jumlah($table){
        return $this->db->get($table);
    }

    function logList(){
        $hasil=$this->db->query("SELECT * FROM log_sistem ORDER BY date DESC");
        return $hasil->result();
    }
}


?>