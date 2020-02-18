<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Barang Terdaftar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Baru</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>
        
        <!-- <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambah"><span class="fa fa-plus"></span> Tambahkan Barang</a></div> -->
        <br>
        
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class='text-left text-light'>Daftar Barang Terdaftar</h1>
            </div>
            <div class="card-body">
                <div class="" id="reload">
                    <table class="table display nowrap dataTable dtr-inline collapsed" id="tableBarangRegister">
                        <thead>
                        <tr align='left'>
                            <th width="50">No</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <!-- <th>Nomor Seri</th> -->
                            <!-- <th>Keterangan</th> -->
                            <!-- <th>Spec</th> -->
                            <th>Bagian</th>
                            <th>Sub Bagian</th>
                            <th>Kode Register</th>
                            <th width="100">Foto</th>
                            <th>Tanggal</th>
                            <th width="50">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_brg_register">
                        
                        </tbody>
                        <tfoot>
                        <tr align="left">
                            <th width="50">No</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <!-- <th>Nomor Seri</th> -->
                            <!-- <th>Keterangan</th> -->
                            <!-- <th>Spec</th> -->
                            <th>Bagian</th>
                            <th>Sub Bagian</th>
                            <th>Kode Register</th>
                            <th>Foto</th>
                            <th>Tanggal</th>
                            <th width="50">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>


        <!--Modal Update barang register-->
        <div class="modal fade" id="modalEditRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="logUsernames" name="logUsernames" value="<?php echo $username ?>">
                    <input type="hidden" id="actions" name="actions" value="melakukan pemindahan pada item">
                    <input type="hidden" name="namas" id="namas" value=""> 
                    <input type="hidden" name="ids" id="ids" value=""> 
                    <input type="hidden" name="idReg" id="idReg" value=""> 
                    <input type="hidden" name="jenis" id="jenis" value=""> 

                    <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <select class="custom-select" required id="bagian" name="bagian" required>
                    <option value="">Pilih Bagian</option>
                    <option value="Timur">1. Timur</option>
                    <option value="Selatan">2. Selatan</option>
                    <option value="Barat">3. Barat</option>
                    <option value="Tengah">4. Tengah</option>
                    <option value="Utara">5. Utara</option>
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="subbag">Sub Bagian</label>
                    <select class="custom-select" required id="subbag" name="subbag" required>
                    <option value="">Pilih Sub Bagian</option>
                    <option value="Direktur Utama">00. Direktur Utama</option>
                    <option value="Direktur Umum">01. Direktur Umum</option>
                    <option value="Direktur Teknik">02. Direktur Teknik</option>
                    <option value="Kepala Cabang">03. Kepala Cabang</option>
                    <option value="Kepala Bagian">04. Kepala Bagian</option>
                    <option value="Admin & Umum">05. Admin & Umum</option>
                    <option value="PTI-Bengkel">06. PTI-Bengkel</option>
                    <option value="Teknik">07. Teknik</option>
                    <option value="Hublang">08. Hublang</option>
                    <option value="Perencanaan">09. Perencanaan</option>
                    <option value="Asset">10. Asset</option>
                    <option value="Penertiban">11. Penertiban</option>
                    <option value="PPTKA">12. PPTKA</option>
                    <option value="R. Server">13. R. Server</option>
                    <option value="Umum">14. Umum</option>
                    <option value="Quality Control">15. Quality Control</option>
                    <option value="R. Laborat">16. R. Laborat</option>
                    <option value="Poli">17. Poli</option>
                    <option value="Humas">18. Humas</option>
                    <option value="Keuangan">19. Keuangan</option>
                    <option value="Kamtib">20. Kamtib</option>
                    </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_register">Update</button>
            </div>
            </div>
        </div>
        </div>
        <!--END Modal Update barang register-->

        <!-- modal qr -->
        <div class="modal" tabindex="-1" role="dialog" id="modalQr">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kode QR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <center>
                <table style="width:550px; height:120px" border="1">
                    <tr>
                        <td colspan="3"> <p><b><h4 class="text-center">KODE INVENTARIS</h4></b></p> </td>
                    </tr>
                    <tr>
                        <td rowspan="3" width="150px"><img id="fotoQr" src="<?php echo base_url() ?>/upload/qr/default.png" alt="" style="width:150px; height:150px;"> </td>
                        <td colspan="2"> <h5 class="text-left"><b><p id="namabrg"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <h5 class="text-left"><b><p id="jenisbrg"></p></b></h5> </td>
                        <td> <h5 class="text-left"><b><p id="kdReg"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <h5 class="text-left"><b><p id="tglbrg"></p></b></h5> </td>
                        <td> <p id=""></p> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                </table>
            </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Cetak</button>
            </div>
            </div>
        </div>
        </div>
        <!-- akhir modal qr -->


        <!-- modal barcode -->
        <div class="modal" tabindex="-1" role="dialog" id="modalBarcode">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kode Barcode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <center>
                <table style="width:550px; height:120px" border="1">
                    <tr>
                        <td colspan="2"> <p><b><h4 class="text-center">KODE INVENTARIS</h4></b></p> </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <h5 class="text-left"><b><p id="nmbrg"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <h5 class="text-left"><b><p id="jnsbrg"></p></b></h5> </td>
                        <td> <h5 class="text-left"><b><p id="kdreg"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <p class="text-center"><img id="fotoBarcode" src="<?php echo base_url() ?>/upload/barcode/default.png" alt=""></p> </td>
                        <td> <h5 class="text-left"><b><p id="tgl"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                </table>
            </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Cetak</button>
            </div>
            </div>
        </div>
        </div>
        <!-- akhir modal barcode -->