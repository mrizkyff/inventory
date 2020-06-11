<?php
    class BrgBaru extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_brgBaru');
        }
        function databarang(){
            $data=$this->m_brgBaru->barangList();
            echo json_encode($data);
        }

        function getBarangByCode(){
            $id = $this->input->post("id");
            $data = $this->m_brgBaru->getBarang($id);
            
            echo json_encode($data);
        }

        

        // upload foto
        public function do_upload()
        {
                $tanggal = date("Y-m-d H:i:s");
                $username = $this->input->post('logUsername');
                $action = $this->input->post('action');
                $idbarang = $this->input->post('id');
                $namaBarang = $this->input->post('nama');
                
                $id = $this->input->post('id');
                $config['upload_path']          = './upload/img/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                // $config['max_size']             = 1024;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('foto')){

                    $upload_data = $this->upload->data();
                    
                    
                    $nama = $upload_data['file_name'];
                    
                    $dt = array(
                        'foto' => $nama
                    );

                    
                    $data = $this->m_brgBaru->updateFoto($dt,$id);

                    $data = array(
                        'kode_brg' => $idbarang,
                        'nama_brg' => $namaBarang,
                        'edit_by' => $username,
                        'activity' => $action,
                        'date' => $tanggal
                    );
                    
                    $data = $this->m_brgBaru->saveLog($data);
                    
                    echo json_encode($data);
                }
        }

        

        function registerBarang(){
            $tanggal = date("Y-m-d H:i:s");
            $kodeBarang = $this->input->post("kodeBarang");
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jenis = $this->input->post("jenis");
            $bagian = $this->input->post("bagian");
            $subbag = $this->input->post("subbag");
            $status = "Terdaftar";




            // menghitung kode register untuk qr
            $prefix = $this->m_brgBaru->kodePrimary('primary');
            $prefix = $prefix[0]->primary;
            
            $kdBagian = '';
            $kdSubBagian = '';
            $kdJenis = '';

            if(strcmp($bagian,'Selatan')==0){
                $kdBagian = $this->m_brgBaru->kodeBagian('selatan');
                $kdBagian = $kdBagian[0]->selatan;
            }
            else if(strcmp($bagian,'Barat')==0){
                $kdBagian = $this->m_brgBaru->kodeBagian('barat');
                $kdBagian = $kdBagian[0]->barat;
            }
            else if(strcmp($bagian,'Timur')==0){
                $kdBagian = $this->m_brgBaru->kodeBagian('timur');
                $kdBagian = $kdBagian[0]->timur;
            }
            else if(strcmp($bagian, 'Utara')==0){
                $kdBagian = $this->m_brgBaru->kodeBagian('utara');
                $kdBagian = $kdBagian[0]->utara;
            }
            else if(strcmp($bagian,'Tengah')==0){
                $kdBagian = $this->m_brgBaru->kodeBagian('tengah');
                $kdBagian = $kdBagian[0]->tengah;
            }


            if(strcmp($subbag,'Direktur Utama')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('dirut');
                $kdSubBagian = $kdSubBagian[0]->dirut;
            }
            else if(strcmp($subbag,'Direktur Umum')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('dirum');
                $kdSubBagian = $kdSubBagian[0]->dirum;
            }
            else if(strcmp($subbag,'Direktur Teknik')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('dirtek');
                $kdSubBagian = $kdSubBagian[0]->dirtek;
            }
            else if(strcmp($subbag,'Kepala Cabang')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('kacab');
                $kdSubBagian = $kdSubBagian[0]->kacab;
            }
            else if(strcmp($subbag,'Kepala Bagian')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('kabag');
                $kdSubBagian = $kdSubBagian[0]->kabag;
            }
            else if(strcmp($subbag,'Admin & Umum')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('admin');
                $kdSubBagian = $kdSubBagian[0]->admin;
            }
            else if(strcmp($subbag,'PTI-Bengkel')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('pti');
                $kdSubBagian = $kdSubBagian[0]->pti;
            }
            else if(strcmp($subbag,'Teknik')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('teknik');
                $kdSubBagian = $kdSubBagian[0]->teknik;
            }
            else if(strcmp($subbag,'Hublang')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('hublang');
                $kdSubBagian = $kdSubBagian[0]->hublang;
            }
            else if(strcmp($subbag,'Perencanaan')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('perencanaan');
                $kdSubBagian = $kdSubBagian[0]->perencanaan;
            }
            else if(strcmp($subbag,'Asset')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('asset');
                $kdSubBagian = $kdSubBagian[0]->asset;
            }
            else if(strcmp($subbag,'Penertiban')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('penertiban');
                $kdSubBagian = $kdSubBagian[0]->penertiban;
            }
            else if(strcmp($subbag,'PPTKA')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('pptka');
                $kdSubBagian = $kdSubBagian[0]->pptka;
            }
            else if(strcmp($subbag,'R. Server')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('server');
                $kdSubBagian = $kdSubBagian[0]->server;
            }
            else if(strcmp($subbag,'Umum')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('umum');
                $kdSubBagian = $kdSubBagian[0]->umum;
            }
            else if(strcmp($subbag,'Quality Control')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('qc');
                $kdSubBagian = $kdSubBagian[0]->qc;
            }
            else if(strcmp($subbag,'R. Laborat')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('lab');
                $kdSubBagian = $kdSubBagian[0]->lab;
            }
            else if(strcmp($subbag,'Poli')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('poli');
                $kdSubBagian = $kdSubBagian[0]->poli;
            }
            else if(strcmp($subbag,'Humas')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('humas');
                $kdSubBagian = $kdSubBagian[0]->humas;
            }
            else if(strcmp($subbag,'Keuangan')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('keuangan');
                $kdSubBagian = $kdSubBagian[0]->keuangan;
            }
            else if(strcmp($subbag,'Kamtib')==0){
                $kdSubBagian = $this->m_brgBaru->kodeSubBagian('kamtib');
                $kdSubBagian = $kdSubBagian[0]->kamtib;
            }


            if(strcmp($jenis,'GPS')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('gps');
                $kdJenis = $kdJenis[0]->gps;
            }
            else if(strcmp($jenis,'Komputer')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('komputer');
                $kdJenis = $kdJenis[0]->komputer;
            }
            else if(strcmp($jenis,'Laptop')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('laptop');
                $kdJenis = $kdJenis[0]->laptop;
            }
            else if(strcmp($jenis,'Monitor')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('monitor');
                $kdJenis = $kdJenis[0]->monitor;
            }
            else if(strcmp($jenis,'Printer')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('printer');
                $kdJenis = $kdJenis[0]->printer;
            }
            else if(strcmp($jenis,'Proyektor')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('proyektor');
                $kdJenis = $kdJenis[0]->proyektor;
            }
            else if(strcmp($jenis,'Scanner')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('scanner');
                $kdJenis = $kdJenis[0]->scanner;
            }
            else if(strcmp($jenis,'UPS')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('ups');
                $kdJenis = $kdJenis[0]->ups;
            }
            else if(strcmp($jenis,'Lain-Lain')==0){
                $kdJenis = $this->m_brgBaru->kodeJenis('lain');
                $kdJenis = $kdJenis[0]->lain;
            }

            $kdRegister = $prefix.".".$kdBagian.".".$kdSubBagian.".".$kdJenis."".$kodeBarang;


            
            
            // membuat qrcode generator
            $this->load->library('ciqrcode');
            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = './assets/'; //string, the default is application/cache/
            $config['errorlog']     = './assets/'; //string, the default is application/logs/
            $config['imagedir']     = './upload/qr/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224,255,255); // array, default is array(255,255,255)
            $config['white']        = array(70,130,180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);

            $qrname=$kdRegister.'.png';

            $params['data'] = $kdRegister;
            $params['level'] = 'H';
            $params['size'] = 10;
            $params['savename'] = FCPATH.$config['imagedir'].$qrname;
            $this->ciqrcode->generate($params);


            // membuat barcode generator
            $redColor = [255, 255, 255];
            $generator = new Picqer\Barcode\BarcodeGeneratorJPG();
            file_put_contents('./upload/barcode/'.$kdRegister.'.png', $generator->getBarcode($kdRegister, $generator::TYPE_CODE_128));
            $barcodeName = $kdRegister.'.png';




            $hasil = array(
                'bagian' => $bagian,
                'subBagian' => $subbag,
                'kodeRegister' => $kdRegister,
                'tgl_register' => $tanggal,
                'qrCode' => $qrname,
                'barCode' => $barcodeName,
                'status' => $status
            );

            $data = $this->m_brgBaru->register($id,$hasil);


            // log khusus untuk register barang stelah register barang berhasil
            $id = $this->input->post("id");
            $username = $this->input->post("username");
            $action = $this->input->post("action");

            $dt = array(
                'kode_brg' => $kodeBarang,
                'nama_brg' => $nama,
                'edit_by' => $username,
                'activity' => $action,
                'date' => $tanggal
            );

            $data = $this->m_brgBaru->saveLog($dt);
            echo json_encode($data);
            

        }

        #simpan pada log sistem
        function logSimpan(){
            $tanggal = date("Y-m-d H:i:s");
            $username = $this->input->post('logUsername');
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
            $data = $this->m_brgBaru->saveLog($data);

            echo json_encode($data);
        }
        
    }
    
    
?>