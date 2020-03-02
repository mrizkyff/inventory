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
            $keterangan = $this->input->post('keterangan');
            $spec = $this->input->post('spec');
            
            $data = $this->m_brgPerencanaan->simpanBarang($nama, $jenis, $merek, $seri, $harga, $keterangan, $spec);

            echo json_encode($data);
            
        }

        function updateBarang(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $merek = $this->input->post('merek');
            $seri = $this->input->post('seri');
            $harga = $this->input->post('harga');
            $keterangan = $this->input->post('keterangan');
            $spec = $this->input->post('spec');
            
            $data = $this->m_brgPerencanaan->updateBarang($id,$nama, $jenis, $merek, $seri, $harga, $keterangan, $spec);

            echo json_encode($data);
        }

        function hapusBarang(){
            $id = $this->input->post('id');
            $data = $this->m_brgPerencanaan->delete($id);
            echo json_encode($data);
        }



        function konfirmasi(){
            $tanggal = date("Y-m-d H:i:s");
            $id = $this->input->post('id');
            $status = "Baru";

            $hasil = array(
                'tgl_baru' => $tanggal,
                'status' => $status
            );

            // konfirmasi dengan mengupdate data diatas
            $data = $this->m_brgPerencanaan->acc($id, $hasil);


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
            $data = $this->m_brgPerencanaan->writeLog($data);

            echo json_encode($data);
        }

        
    }
    
?>