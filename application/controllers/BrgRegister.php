<?php
class BrgRegister extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('m_brgRegister');
    }

    function dataBarang(){
        $data = $this->m_brgRegister->listBarang();
        echo json_encode($data);
    }

    function updateBarang(){
        $tanggal = date("Y-m-d H:i:s");
        $kodeBarang = $this->input->post('idBarang');
        $nama = $this->input->post('namaBarang');
        $bagian = $this->input->post('bagian');
        $subbag = $this->input->post('subbag');
        $username = $this->input->post('username');
        $action = $this->input->post('action');
        $idReg = $this->input->post('idReg');
        $jenis = $this->input->post('jenis');


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
        else if(strcmp($subbag,'Teknik')==0){
            $kdSubBagian = '07';
        }
        else if(strcmp($subbag,'Hublang')==0){
            $kdSubBagian = '08';
        }
        else if(strcmp($subbag,'Perencanaan')==0){
            $kdSubBagian = '09';
        }
        else if(strcmp($subbag,'Asset')==0){
            $kdSubBagian = '10';
        }
        else if(strcmp($subbag,'Penertiban')==0){
            $kdSubBagian = '11';
        }
        else if(strcmp($subbag,'PPTKA')==0){
            $kdSubBagian = 12;
        }
        else if(strcmp($subbag,'R. Server')==0){
            $kdSubBagian = 13;
        }
        else if(strcmp($subbag,'Umum')==0){
            $kdSubBagian = 14;
        }
        else if(strcmp($subbag,'Quality Control')==0){
            $kdSubBagian = 15;
        }
        else if(strcmp($subbag,'R. Laborat')==0){
            $kdSubBagian = 16;
        }
        else if(strcmp($subbag,'Poli')==0){
            $kdSubBagian = 17;
        }
        else if(strcmp($subbag,'Humas')==0){
            $kdSubBagian = 18;
        }
        else if(strcmp($subbag,'Keuangan')==0){
            $kdSubBagian = 19;
        }
        else if(strcmp($subbag,'Kamtib')==0){
            $kdSubBagian = 20;
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
        // $redColor = [255, 255, 255];
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        file_put_contents('./upload/barcode/'.$kdRegister.'.png', $generator->getBarcode($kdRegister, $generator::TYPE_CODE_128));
        $barcodeName = $kdRegister.'.png';
        

        $dt = array(
            'bagian' => $bagian,
            'subBagian' => $subbag,
            'kodeRegister' => $kdRegister,
            'qrCode' => $qrname,
            'barCode' => $barcodeName
        );

        $data = $this->m_brgRegister->update($dt, $idReg);

        // log khusus untuk register barang stelah register barang berhasil

        $dt = array(
            'kode_brg' => $kodeBarang,
            'nama_brg' => $nama,
            'edit_by' => $username,
            'activity' => $action,
            'date' => $tanggal
        );

        $data = $this->m_brgRegister->saveLog($dt);

        echo json_encode($data);
    }

    
    
}

?>