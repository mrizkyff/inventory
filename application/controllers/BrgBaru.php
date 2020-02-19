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
            $prefix = '03';
            $kdBagian = '';
            $kdSubBagian = '';
            $kdJenis = '';

            if(strcmp($bagian,'Selatan')==0){
                $kdBagian = 31;
            }
            else if(strcmp($bagian,'Barat')==0){
                $kdBagian = 32;
            }
            else if(strcmp($bagian,'Timur')==0){
                $kdBagian = 33;
            }
            else if(strcmp($bagian, 'Utara')==0){
                $kdBagian = 34;
            }
            else if(strcmp($bagian,'Tengah')==0){
                $kdBagian = 35;
            }


            if(strcmp($subbag,'Direktur Utama')==0){
                $kdSubBagian = '00';
            }
            else if(strcmp($subbag,'Direktur Umum')==0){
                $kdSubBagian = '01';
            }
            else if(strcmp($subbag,'Direktur Teknik')==0){
                $kdSubBagian = '02';
            }
            else if(strcmp($subbag,'Kepala Cabang')==0){
                $kdSubBagian = '03';
            }
            else if(strcmp($subbag,'Kepala Bagian')==0){
                $kdSubBagian = '04';
            }
            else if(strcmp($subbag,'Admin & Umum')==0){
                $kdSubBagian = '05';
            }
            else if(strcmp($subbag,'PTI-Bengkel')==0){
                $kdSubBagian = '06';
            }
            else if(strcmp($subbag,'Hublang')==0){
                $kdSubBagian = '07';
            }
            else if(strcmp($subbag,'Perencanaan')==0){
                $kdSubBagian = '08';
            }
            else if(strcmp($subbag,'Asset')==0){
                $kdSubBagian = '09';
            }
            else if(strcmp($subbag,'Penertiban')==0){
                $kdSubBagian = '10';
            }
            else if(strcmp($subbag,'PPTKA')==0){
                $kdSubBagian = 11;
            }
            else if(strcmp($subbag,'R. Server')==0){
                $kdSubBagian = 12;
            }
            else if(strcmp($subbag,'Umum')==0){
                $kdSubBagian = 13;
            }
            else if(strcmp($subbag,'Quality Control')==0){
                $kdSubBagian = 14;
            }
            else if(strcmp($subbag,'R. Laborat')==0){
                $kdSubBagian = 15;
            }
            else if(strcmp($subbag,'Poli')==0){
                $kdSubBagian = 16;
            }
            else if(strcmp($subbag,'Humas')==0){
                $kdSubBagian = 17;
            }
            else if(strcmp($subbag,'Keuangan')==0){
                $kdSubBagian = 18;
            }
            else if(strcmp($subbag,'Kamtib')==0){
                $kdSubBagian = 19;
            }


            if(strcmp($jenis,'GPS')==0){
                $kdJenis = "G";
            }
            else if(strcmp($jenis,'Komputer')==0){
                $kdJenis = "K";
            }
            else if(strcmp($jenis,'Laptop')==0){
                $kdJenis = "L";
            }
            else if(strcmp($jenis,'Monitor')==0){
                $kdJenis = "M";
            }
            else if(strcmp($jenis,'Printer')==0){
                $kdJenis = "P";
            }
            else if(strcmp($jenis,'Proyektor')==0){
                $kdJenis = "PR";
            }
            else if(strcmp($jenis,'Scanner')==0){
                $kdJenis = "S";
            }
            else if(strcmp($jenis,'UPS')==0){
                $kdJenis = "U";
            }
            else if(strcmp($jenis,'Lain-Lain')==0){
                $kdJenis = "LL";
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