<?php
    class M_brgPerencanaan extends CI_Model
    {
        function barangList(){
            $hasil=$this->db->query("SELECT * FROM brg_perencanaan ORDER BY id DESC");
            return $hasil->result();
        }
        
        function getBarangByCode($id){
            $hasil = $this->db->query("SELECT * FROM brg_perencanaan WHERE id='$id'");
            if($hasil->num_rows()>0){
                foreach($hasil->result() as $data){
                    $hasil=array(
                        'nama' => $data->nama,
                        'jenis' => $data->jenis,
                        'merek' => $data->merek,
                        'seri' => $data->seri,
                        'harga' => $data->harga,
                        'jumlah' => $data->jumlah,
                        'keterangan' => $data->keterangan,
                        'spec' => $data->spec
                    );
                }
            }
            return $hasil;
        }

        function simpanBarang($nama, $jenis, $merek, $seri, $harga, $jumlah, $keterangan, $spec){
            $tanggal = date("Y-m-d H:i:s");

            $hasil = $this->db->query("INSERT INTO brg_perencanaan (jenis, nama, merek, seri, harga, jumlah, keterangan, spec, tanggal) VALUES ('$jenis','$nama','$merek','$seri','$harga','$jumlah','$keterangan','$spec','$tanggal')");
            return $hasil;
        }
        
        function updateBarang($id,$nama, $jenis, $merek, $seri, $harga, $jumlah, $keterangan, $spec,$tanggal){
            

            $hasil = $this->db->query("UPDATE brg_perencanaan SET nama='$nama', jenis='$jenis', merek='$merek', seri='$seri', harga='$harga', jumlah='$jumlah', keterangan='$keterangan', spec='$spec', tanggal='$tanggal' WHERE id='$id'");
            return $hasil;
        }

        function hapusBarang($id){
            $hasil=$this->db->query("DELETE FROM brg_perencanaan WHERE id='$id'");
            return $hasil;
        }

        function accBarang($id){
            // ambil semua data dari tb perencanaan
            $barang = $this->getBarangByCode($id);
            return $barang;


            // simpan ke tb barang baru
            
        }

        function updateJumlah($id,$jumlah){
            $jumlah = $jumlah-1;
            $hasil = $this->db->query("UPDATE brg_perencanaan SET jumlah='$jumlah' WHERE id='$id'");
            return $hasil;
        }

        function simpanBrgBaru($hasil){
            // $hasil = $this->db->query("INSERT INTO brg_baru (kodeBarang, jenis, nama, merek, seri, keterangan, spec, tanggal) VALUES ('$id','$jenis','$nama','$merek','$seri','$keterangan','$spec','$tanggal')");
            return $this->db->insert('brg_baru',$hasil);
        }

        function saveLog($data){
            return $this->db->insert('log_sistem',$data);
        }

        // function logList(){
        //     $hasil=$this->db->query("SELECT * FROM log_sistem ORDER BY date DESC");
        //     return $hasil->result();
        // }
    }
    
?>