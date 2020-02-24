<?php
    class Setting extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('m_setting');
        }

        function updateKodePrimary(){
            $dt = array(
                'primary' => $this->input->post('primary'),
            );
            $data = $this->m_setting->updatePrimary($dt);
            echo json_encode($data);
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
        function simpanLayout(){
            // barcode
            $id = 1;
            $judulBc = $this->input->post('judulBc');
            $ket1Bc = $this->input->post('ket1Bc');
            $ket2Bc = $this->input->post('ket2Bc');
            $ket3Bc = $this->input->post('ket3Bc');
            $ket4Bc = $this->input->post('ket4Bc');
            $dataBarcode = array(
                'judul' => $judulBc,
                'ket1' => $ket1Bc,
                'ket2' => $ket2Bc,
                'ket3' => $ket3Bc,
                'ket4' => $ket4Bc
            );
            $data = $this->m_setting->saveLayout($id,$dataBarcode,'setting_barcode');

            // qr
            $judulQr = $this->input->post('judulQr');
            $ket1Qr = $this->input->post('ket1Qr');
            $ket2Qr = $this->input->post('ket2Qr');
            $ket3Qr = $this->input->post('ket3Qr');
            $ket4Qr = $this->input->post('ket4Qr');
            $dataQr = array(
                'judul' => $judulQr,
                'ket1' => $ket1Qr,
                'ket2' => $ket2Qr,
                'ket3' => $ket3Qr,
                'ket4' => $ket4Qr
            );
            $data = $this->m_setting->saveLayout($id,$dataQr,'setting_qr');
            echo json_encode($data);
       
        }

        function getLayoutSettingBc(){
            $dataBc = $this->m_setting->getLayoutBarcode();
            echo json_encode($dataBc);
        }
        function getLayoutSettingQr(){
            $dataBc = $this->m_setting->getLayoutQr();
            echo json_encode($dataBc);
        }
    }
    
?>