<?php
class BrgRegister extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('m_brgRegister');
        $this->load->model('m_brgBaru');
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
        // $redColor = [255, 255, 255];
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        file_put_contents('./upload/barcode/'.$kdRegister.'.png', $generator->getBarcode($kdRegister, $generator::TYPE_CODE_128));
        $barcodeName = $kdRegister.'.png';
        

        $dt = array(
            'bagian' => $bagian,
            'subBagian' => $subbag,
            'kodeRegister' => $kdRegister,
            'qrCode' => $qrname,
            'barCode' => $barcodeName,
            'tgl_register' => $tanggal
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

    function barangRusak(){
        $tanggal = date("Y-m-d H:i:s");
        $id = $this->input->post('id');
        $rusak = $this->m_brgRegister->getKerusakan($id);
            $rusak = $rusak[0]->kerusakan;
        $kerusakan = $this->input->post('kerusakan');
            $kerusakan = $rusak.' ('.$tanggal.'->'.$kerusakan.' )'.'<br>';
        $nama = $this->input->post('nama');
        $action = $this->input->post('action');
        $username = $this->input->post('username');
        $status = 'Rusak';

        // update barang menjadi rusak
        $dt = array(
            'status' => $status,
            'kerusakan' => $kerusakan,
            'tgl_rusak' => $tanggal
        );
        $data = $this->m_brgRegister->rusak($id, $dt);

        // simpan di log
        $dt = array(
            'kode_brg' => $id,
            'nama_brg' => $nama,
            'edit_by' => $username,
            'activity' => $action,
            'date' => $tanggal,
            'kerusakan' => $kerusakan
        );
        $data = $this->m_brgRegister->saveLog($dt);
        echo json_encode($data);
    }

    function getInfoQr(){
        $id = $this->input->post('id');
        $dt = $this->m_brgRegister->getBarangById($id);
        $keterangan = $this->m_brgRegister->getFieldQr();
        $judul = $keterangan[0]->judul;
        $ket1 = $keterangan[0]->ket1;
        $ket2 = $keterangan[0]->ket2;
        $ket3 = $keterangan[0]->ket3;
        $ket4 = $keterangan[0]->ket4;

        $field1 = $dt[0]->$ket1;
        $field2 = $dt[0]->$ket2;
        $field3 = $dt[0]->$ket3;
        $field4 = $dt[0]->$ket4;

        $data = array(
            'judul' => $judul,
            'ket1' => $field1,
            'ket2' => $field2,
            'ket3' => $field3,
            'ket4' => $field4
        );

        echo json_encode($data);
    }
    
    function getInfoBarcode(){
        $id = $this->input->post('id');
        $dt = $this->m_brgRegister->getBarangById($id);
        $keterangan = $this->m_brgRegister->getFieldBarcode();
        $judul = $keterangan[0]->judul;
        $ket1 = $keterangan[0]->ket1;
        $ket2 = $keterangan[0]->ket2;
        $ket3 = $keterangan[0]->ket3;
        $ket4 = $keterangan[0]->ket4;

        $field1 = $dt[0]->$ket1;
        $field2 = $dt[0]->$ket2;
        $field3 = $dt[0]->$ket3;
        $field4 = $dt[0]->$ket4;

        $data = array(
            'judul' => $judul,
            'ket1' => $field1,
            'ket2' => $field2,
            'ket3' => $field3,
            'ket4' => $field4
        );
        echo json_encode($data);
    }
    
}

?>