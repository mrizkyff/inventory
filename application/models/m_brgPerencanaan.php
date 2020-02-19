<?php
    class M_brgPerencanaan extends CI_Model
    {
        function barangList(){            
            // select item yang statusnya hanya perencanaan
            $this->db->select('id, nama, jenis, merek, seri, harga, keterangan, spec, tgl_perencanaan');
            $this->db->where('status','Perencanaan');
            $this->db->order_by('tgl_perencanaan','DESC');
            $hasil = $this->db->get('daftar_barang');
            return $hasil->result();
        }
        
        function getBarangByCode($id){
            $this->db->select('nama, jenis, merek, seri, harga, keterangan, spec');
            $this->db->where('status','Perencanaan');
            $this->db->where('id',$id);
            $hasil = $this->db->get("daftar_barang");
            if($hasil->num_rows()>0){
                foreach($hasil->result() as $data){
                    $hasil=array(
                        'nama' => $data->nama,
                        'jenis' => $data->jenis,
                        'merek' => $data->merek,
                        'seri' => $data->seri,
                        'harga' => $data->harga,
                        'keterangan' => $data->keterangan,
                        'spec' => $data->spec
                    );
                }
            }
            return $hasil;
        }

        function simpanBarang($nama, $jenis, $merek, $seri, $harga, $jumlah, $keterangan, $spec){
            $tanggal = date("Y-m-d H:i:s");
            $status = "Perencanaan";

            $hasil = $this->db->query("INSERT INTO daftar_barang (jenis, nama, merek, seri, harga, jumlah, keterangan, spec, tgl_perencanaan, status) VALUES ('$jenis','$nama','$merek','$seri','$harga','$jumlah','$keterangan','$spec','$tanggal', '$status')");
            return $hasil;
        }
        
        function updateBarang($id,$nama, $jenis, $merek, $seri, $harga, $keterangan, $spec){
            $tanggal = date("Y-m-d H:i:s");
            $data = array(
                'nama' => $nama,
                'jenis' => $jenis,
                'merek' => $merek,
                'seri' => $seri,
                'harga' => $harga,
                'keterangan' => $keterangan,
                'spec' => $spec,
                'tgl_perencanaan' => $tanggal
            );
            $this->db->where('id',$id);
            $hasil = $this->db->update('daftar_barang',$data);
            return $hasil;
        }
        function delete($id){
            $this->db->where('id',$id);
            $hasil = $this->db->delete('daftar_barang');
            return $hasil;
        }

        function acc($id, $data){
            $this->db->where('id',$id);
            return $this->db->update('daftar_barang',$data);
        }

        function writeLog($data){
            return $this->db->insert('log_sistem',$data);
        }
    }
    
?>