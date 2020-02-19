<?php
    class BrgRusak extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_brgRusak');
        }
        public function loadBarang(){
            $data = $this->m_brgRusak->tampilBarang();
            echo json_encode($data);
        }
        public function perbaikan(){
            $tanggal = date("Y-m-d H:i:s");
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $status = 'Terdaftar';
            $action = $this->input->post('action');
            $username = $this->input->post('username');
            $perbaikan = $this->input->post('perbaikan');

            $dt = array(
                'status' => $status,
                'perbaikan' => $perbaikan,
                'tgl_register' => $tanggal
            );

            $data = $this->m_brgRusak->repair($dt,$id);

            // insert data di log
            $log = array(
                'kode_brg' => $id,
                'nama_brg' => $nama,
                'edit_by' => $username,
                'activity' => $action,
                'date' => $tanggal,
                'perbaikan' => $perbaikan
            );

            $data = $this->m_brgRusak->saveLog($log);

            echo json_encode($data);

        }
        public function upgrade(){
            $tanggal = date("Y-m-d H:i:s");
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $status = 'Rusak';
            $action = $this->input->post('action');
            $username = $this->input->post('username');
            $upgrade = $this->input->post('upgrade');

            $dt = array(
                'status' => $status,
                'upgrade' => $upgrade,
                'tgl_register' => $tanggal
            );

            $data = $this->m_brgRusak->upgrade($dt,$id);

            // insert data di log
            $log = array(
                'kode_brg' => $id,
                'nama_brg' => $nama,
                'edit_by' => $username,
                'activity' => $action,
                'date' => $tanggal,
                'upgrade' => $upgrade
            );

            $data = $this->m_brgRusak->saveLog($log);

            echo json_encode($data);
        }
    }
    
?>