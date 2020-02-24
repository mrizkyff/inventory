<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengaturan Program</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>

        <!-- menu setting kode -->
        <div class="card">
            <div class="card-header bg-secondary">
                <h5 class='text-left text-light'>Pengaturan Kode Inventaris</h1>
            </div>
            <div class="card-body">
                <div class="" id="reload">
                    <div class="container">
                    <div class="row">
                        <div class="col">
                        <h3>Kode Primary</h3>
                            <form>
                                <div class="form-group">
                                    <label for="primary">Kode Primary</label>
                                    <input type="text" name="primary" id="primary" value="<?php echo $primary ?>" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="col">
                        <h3>Kode Jenis</h3>
                            <form>
                                <div class="form-group">
                                    <label for="gps">1. GPS</label>
                                    <input type="text" name="gps" id="gps" class="form-control" value="<?php echo $gps ?>">
                                </div>
                                <div class="form-group">
                                    <label for="komputer">2. Komputer</label>
                                    <input type="text" name="komputer" id="komputer" class="form-control" value="<?php echo $komputer ?>">
                                </div>
                                <div class="form-group">
                                    <label for="laptop">3. Laptop</label>
                                    <input type="text" name="laptop" id="laptop" class="form-control" value="<?php echo $laptop ?>">
                                </div>
                                <div class="form-group">
                                    <label for="monitor">4. Monitor</label>
                                    <input type="text" name="monitor" id="monitor" class="form-control" value="<?php echo $monitor ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Printer">5. Printer</label>
                                    <input type="text" name="printer" id="printer" class="form-control" value="<?php echo $printer ?>">
                                </div>
                                <div class="form-group">
                                    <label for="proyektor">6. Proyektor</label>
                                    <input type="text" name="proyektor" id="proyektor" class="form-control" value="<?php echo $proyektor ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Scanner">7. Scanner</label>
                                    <input type="text" name="scanner" id="scanner" class="form-control" value="<?php echo $scanner ?>">
                                </div>
                                <div class="form-group">
                                    <label for="ups">8. UPS</label>
                                    <input type="text" name="ups" id="ups" class="form-control" value="<?php echo $ups ?>">
                                </div>
                                <div class="form-group">
                                    <label for="lain">9. Lain-Lain</label>
                                    <input type="text" name="lain" id="lain" class="form-control" value="<?php echo $lain ?>">
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <h3>Kode Bagian</h3>
                            <form>
                                <div class="form-group">
                                    <label for="tengah">1. Cabang Tengah</label>
                                    <input type="text" class="form-control" id="tengah" name="tengah" value="<?php echo $tengah ?>">
                                </div>
                                <div class="form-group">
                                    <label for="timur">2. Cabang Timur</label>
                                    <input type="text" class="form-control" id="timur" name="timur" value="<?php echo $timur ?>">
                                </div>
                                <div class="form-group">
                                    <label for="barat">3. Cabang Barat</label>
                                    <input type="text" class="form-control" id="barat" name="barat" value="<?php echo $barat ?>">
                                </div>
                                <div class="form-group">
                                    <label for="selatan">4. Cabang Selatan</label>
                                    <input type="text" class="form-control" id="selatan" name="selatan" value="<?php echo $selatan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="utara">5. Cabang Utara</label>
                                    <input type="text" class="form-control" id="utara" name="utara" value="<?php echo $utara ?>">
                                </div>
                            </form>
                        </div>
                        <div class="col">
                        <h3>Kode Sub Bagian</h3>
                            <form>
                                <div class="form-group">
                                    <label for="dirut">1. Direktur Utama</label>
                                    <input type="text" name="dirut" id="dirut" class="form-control" value="<?php echo $dirut ?>">
                                </div>
                                <div class="form-group">
                                    <label for="dirum">2. Direktur Umum</label>
                                    <input type="text" name="dirum" id="dirum" class="form-control" value="<?php echo $dirum ?>">
                                </div>
                                <div class="form-group">
                                    <label for="dirtek">3. Direktur Teknik</label>
                                    <input type="text" name="dirtek" id="dirtek" class="form-control" value="<?php echo $dirtek ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kacab">4. Kepala Cabang</label>
                                    <input type="text" name="kacab" id="kacab" class="form-control" value="<?php echo $kacab ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">5. Kepala Bagian</label>
                                    <input type="text" name="kabag" id="kabag" class="form-control" value="<?php echo $kabag ?>">
                                </div>
                                <div class="form-group">
                                    <label for="admin">6. Admin dan Umum</label>
                                    <input type="text" name="admin" id="admin" class="form-control" value="<?php echo $admin ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pti">7. PTI - Bengkel</label>
                                    <input type="text" name="pti" id="pti" class="form-control" value="<?php echo $pti ?>">
                                </div>
                                <div class="form-group">
                                    <label for="teknik">8. Teknik</label>
                                    <input type="text" name="teknik" id="teknik" class="form-control" value="<?php echo $teknik ?>">
                                </div>
                                <div class="form-group">
                                    <label for="hublang">9. Hublang</label>
                                    <input type="text" name="hublang" id="hublang" class="form-control" value="<?php echo $hublang ?>">
                                </div>
                                <div class="form-group">
                                    <label for="perencanaan">10. Perencanaan</label>
                                    <input type="text" name="perencanaan" id="perencanaan" class="form-control" value="<?php echo $perencanaan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="asset">11. Asset</label>
                                    <input type="text" name="asset" id="asset" class="form-control" value="<?php echo $asset ?>">
                                </div>
                                <div class="form-group">
                                    <label for="penertiban">12. Penertiban</label>
                                    <input type="text" name="penertiban" id="penertiban" class="form-control" value="<?php echo $penertiban ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pptka">13. PPTKA</label>
                                    <input type="text" name="pptka" id="pptka" class="form-control" value="<?php echo $pptka ?>">
                                </div>
                                <div class="form-group">
                                    <label for="server">14. R. Server</label>
                                    <input type="text" name="server" id="server" class="form-control" value="<?php echo $server ?>">
                                </div>
                                <div class="form-group">
                                    <label for="umum">15. Umum</label>
                                    <input type="text" name="umum" id="umum" class="form-control" value="<?php echo $umum ?>">
                                </div>
                                <div class="form-group">
                                    <label for="qc">16. Quality Control</label>
                                    <input type="text" name="qc" id="qc" class="form-control" value="<?php echo $qc ?>">
                                </div>
                                <div class="form-group">
                                    <label for="lab">17. R. Laborat</label>
                                    <input type="text" name="lab" id="lab" class="form-control" value="<?php echo $lab ?>">
                                </div>
                                <div class="form-group">
                                    <label for="poli">18. Poli</label>
                                    <input type="text" name="poli" id="poli" class="form-control" value="<?php echo $poli ?>">
                                </div>
                                <div class="form-group">
                                    <label for="humas">19. Humas</label>
                                    <input type="text" name="humas" id="humas" class="form-control" value="<?php echo $humas ?>">
                                </div>
                                <div class="form-group">
                                    <label for="keuangan">20. Keuangan</label>
                                    <input type="text" name="keuangan" id="keuangan" class="form-control" value="<?php echo $keuangan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kamtib">21. Kamtib</label>
                                    <input type="text" name="kamtib" id="kamtib" class="form-control" value="<?php echo $kamtib ?>">
                                </div>

                            </form>
                        </div>
                        


                    </div>
                </div>
                <button class="btn btn-primary" id="_layout" style="float:right;">Simpan</button>
            </div>
        </div>
        </div>
        <!-- akhir menu setting kode -->


        <!-- menu setting layout barcode -->
        <div class="card">
            <div class="card-header bg-info">
                <h5 class='text-left text-light'>Pengaturan Layout Barcode</h1>
            </div>
            <div class="card-body">
                <div class="" id="reload">
                    <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- barcode -->
                            <table style="width:550px; height:120px" border="1">
                                <tr>
                                    <td colspan="2">
                                    <center>
                                        <div class="form-group" style="width:70%;">
                                        <label for="set_judulBc">Judul Label</label>
                                        <input type="text" name="set_judulBc" id="set_judulBc" class="form-control" placeholder="Judul Barcode">
                                        </div>
                                    </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                            <select name="set_field1Bc" id="set_field1Bc" class="form-control" style="width:80%;">
                                                <option value="">Keterangan 1</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>
                                    </td>
                                    <!-- <td> <p id="namabrg"></p> </td> -->
                                </tr>
                                <tr>
                                    <td>
                                            <select name="set_field2Bc" id="set_field2Bc" class="form-control" style="width:80%;">
                                                <option value="">Keterangan 2</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>
                                    </td>
                                    <td>
                                            <select name="set_field3Bc" id="set_field3Bc" class="form-control" style="width:80%;">
                                                <option value="">Keterangan 3</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>
                                    </td>
                                    <!-- <td> <p id="namabrg"></p> </td> -->
                                </tr>
                                <tr>
                                    <td> <p class="text-center"><img id="fotoBarcode" src="<?php echo base_url() ?>/upload/barcode/default.png" alt=""></p> </td>
                                    <td>
                                            <select name="set_field4Bc" id="set_field4Bc" class="form-control" style="width:80%;">
                                                <option value="">Keterangan 4</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>
                                    </td>
                                    <!-- <td> <p id="namabrg"></p> </td> -->
                                </tr>
                            </table>
                        </div>

                        <div class="col">
                            <!-- qr -->
                            <table style="width:550px; height:120px" border="1">
                                <tr>
                                    <td colspan="3"> 
                                    <center>
                                        <div class="form-group" style="width:70%;">
                                        <label for="set_judulQr">Judul Label</label>
                                        <input type="text" name="set_judulQr" id="set_judulQr" class="form-control" placeholder="Judul QR Code">
                                        </div>
                                    </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3" width="150px"><img id="fotoQr" src="<?php echo base_url() ?>/upload/qr/default.png" alt="" style="width:150px; height:150px;"> </td>
                                    <td colspan="2"> <h5 class="text-left"><b>

                                            <select name="set_field1Qr" id="set_field1Qr" class="form-control" style="width:80%;">
                                                <option value="">Keterangan 1</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>

                                    </b></h5> </td>
                                    <!-- <td> <p id="namabrg"></p> </td> -->
                                </tr>
                                <tr>
                                    <td>
                                            <select name="set_field2Qr" id="set_field2Qr" class="form-control">
                                                <option value="">Keterangan 2</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>
                                    </td>
                                    <td>
                                             <select name="set_field3Qr" id="set_field3Qr" class="form-control">
                                                <option value="">Keterangan 3</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>
                                    </td>
                                    <!-- <td> <p id="namabrg"></p> </td> -->
                                </tr>
                                <tr>
                                    <td>
                                            <select name="set_field4Qr" id="set_field4Qr" class="form-control">
                                                <option value="">Keterangan 4</option>
                                                <option value="jenis">Jenis Barang</option>
                                                <option value="kodeRegister">Kode Register</option>
                                                <option value="nama">Nama Barang</option>
                                                <option value="merek">Merek</option>
                                                <option value="harga">Harga</option>
                                                <option value="keterangan">Keterangan Barang</option>
                                                <option value="spec">Spesifikasi</option>
                                                <option value="tgl_register">Tanggal</option>
                                            </select>
                                    
                                    </td>
                                    <td>
                                    </td>
                                    <!-- <td> <p id="namabrg"></p> </td> -->
                                </tr>
                            </table>
                        </div>                     
                    </div>
                </div>
                <button class="btn btn-primary" id="btn_simpan_layout" style="float:right;">Simpan</button>
            </div>
        </div>
        </div>