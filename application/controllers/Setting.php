<?php
    class Setting extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('m_setting');
        }

        function updateKodeJenis(){
            $dt = array(
                'gps' => $this->input->post('gps'),
                'komputer' => $this->input->post('komputer'),
                'laptop' => $this->input->post('laptop'),
                'monitor' => $this->input->post('monitor'),
                'printer' => $this->input->post('printer'),
                'proyektor' => $this->input->post('proyektor'),
                'scanner' => $this->input->post('scanner'),
                'ups' => $this->input->post('ups'),
                'lain' => $this->input->post('lain')
            );
            $data = $this->m_setting->updateJenis($dt);
            echo json_encode($data);
        }

        function updateKodeBagian(){
            $dt = array(
                'tengah' => $this->input->post('tengah'),
                'timur' => $this->input->post('timur'),
                'barat' => $this->input->post('barat'),
                'selatan' => $this->input->post('selatan'),
                'utara' => $this->input->post('utara')
            );
            $data = $this->m_setting->updateBagian($dt);
            echo json_encode($data);
        }
        function updateKodeSubBagian(){
            $dt = array(
                'dirut' => $this->input->post('dirut'),
                'dirum' => $this->input->post('dirum'),
                'dirtek' => $this->input->post('dirtek'),
                'kacab' => $this->input->post('kacab'),
                'kabag' => $this->input->post('kabag'),
                'admin' => $this->input->post('admin'),
                'pti' => $this->input->post('pti'),
                'teknik' => $this->input->post('teknik'),
                'hublang' => $this->input->post('hublang'),
                'perencanaan' => $this->input->post('perencanaan'),
                'asset' => $this->input->post('asset'),
                'penertiban' => $this->input->post('penertiban'),
                'pptka' => $this->input->post('pptka'),
                'server' => $this->input->post('server'),
                'umum' => $this->input->post('umum'),
                'qc' => $this->input->post('qc'),
                'lab' => $this->input->post('lab'),
                'poli' => $this->input->post('poli'),
                'humas' => $this->input->post('humas'),
                'keuangan' => $this->input->post('keuangan'),
                'kamtib' => $this->input->post('kamtib')
            );
            $data = $this->m_setting->updateSubbag($dt);
            echo json_encode($data);
        }
    }
    
?>