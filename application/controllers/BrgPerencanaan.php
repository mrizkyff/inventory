<?php
    class BrgPerencanaan extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_brgPerencanaan');
        }
        function databarang(){
            $data=$this->m_brgPerencanaan->barangList();
            echo json_encode($data);
        }


        function getbarang(){
            $id = $this->input->get('id');
            $data = $this->m_brgPerencanaan->getBarangByCode($id);
            echo json_encode($data);
        }

        function simpanBarang(){
            $nama = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $merek = $this->input->post('merek');
            $seri = $this->input->post('seri');
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $keterangan = $this->input->post('keterangan');
            $spec = $this->input->post('spec');
            
            $data = $this->m_brgPerencanaan->simpanBarang($nama, $jenis, $merek, $seri, $harga, $jumlah, $keterangan, $spec);

            echo json_encode($data);
            
        }

        function updateBarang(){
            $tanggal = date("Y-m-d H:i:s");
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $merek = $this->input->post('merek');
            $seri = $this->input->post('seri');
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $keterangan = $this->input->post('keterangan');
            $spec = $this->input->post('spec');
            
            $data = $this->m_brgPerencanaan->updateBarang($id,$nama, $jenis, $merek, $seri, $harga, $jumlah, $keterangan, $spec, $tanggal);

            echo json_encode($data);
        }

        function hapusBarang(){
            $id = $this->input->post('id');
            $data = $this->m_brgPerencanaan->hapusBarang($id);
            echo json_encode($data);
        }

        function updateJml(){
            // $tanggal = date("Y-m-d H:i:s");
            $tanggal = date("Y-m-d H:i:s");
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $merek = $this->input->post('merek');
            $seri = $this->input->post('seri');
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $keterangan = $this->input->post('keterangan');
            $spec = $this->input->post('spec');

            $data = $this->m_brgPerencanaan->updateJumlah($id,$jumlah);
            $this->simpanBarangBaru($id, $nama, $jenis, $merek, $seri, $keterangan, $spec, $tanggal);
            // if($data){
            // }

            echo json_encode($data);
        }

        function simpanBarangBaru(){
            $tanggal = date("Y-m-d H:i:s");
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $merek = $this->input->post('merek');
            $seri = $this->input->post('seri');
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $keterangan = $this->input->post('keterangan');
            $spec = $this->input->post('spec');

            $hasil = array(
                'kodeBarang' => $id,
                'nama' => $nama,
                'jenis' => $jenis,
                'merek' => $merek,
                'seri' => $seri,
                'jumlah' => $jumlah,
                'keterangan' => $keterangan,
                'spec' => $spec,
                'tanggal' => $tanggal
            );
            // $data = $this->m_brgPerencanaan->simpanBrgBaru($id, $nama, $jenis, $merek, $seri, $keterangan, $spec, $tanggal);
            $data = $this->m_brgPerencanaan->simpanBrgBaru($hasil);

            // hapus data lama di perencanaan
            $data = $this->m_brgPerencanaan->hapusBarang($id);

            echo json_encode($data);
        }

        // simpan pada log sistem
        function logSimpan(){
            $tanggal = date("Y-m-d H:i:s");
            $username = $this->input->post('username');
            $action = $this->input->post('action');
            $idbarang = $this->input->post('id');
            $namaBarang = $this->input->post('nama');
            $data = array(
                'kode_brg' => $idbarang,
                'nama_brg' => $namaBarang,
                'edit_by' => $username,
                'activity' => $action,
                'date' => $tanggal
            );
            $data = $this->m_brgPerencanaan->saveLog($data);

            echo json_encode($data);
        }

        
    }
    
?>