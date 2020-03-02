<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Barang Rusak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barang Rusak</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->

  

      <!-- card log system -->
      <div class="card">
        <div class="card-header bg-danger">
          Daftar Barang Rusak
        </div>
        <div class="card-body">
        <table class="table display nowrap dataTable dtr-inline collapsed" id="tableBarangRusak">
                        <thead>
                        <tr align='left'>
                            <th width="20">No</th>
                            <th width="20">id</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Nomor Seri</th>
                            <!-- <th>Jumlah</th> -->
                            <th>Keterangan</th>
                            <th>Spec</th>
                            <th>Foto</th>
                            <th>Tanggal</th>
                            <th width="50">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_brg_rusak">
                        
                        </tbody>
                        <tfoot>
                        <tr align="left">
                            <th>No</th>
                            <th>id</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Nomor Seri</th>
                            <!-- <th>Jumlah</th> -->
                            <th>Keterangan</th>
                            <th>Spec</th>
                            <th>Foto</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
        </div>
      </div>
      <!-- akhir card log system -->

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
                        <td colspan="3"> <h4 id="judulQr" class="text-center"></h4> </td>
                    </tr>
                    <tr>
                        <td rowspan="3" width="150px"><img id="fotoQr" src="<?php echo base_url() ?>/upload/qr/default.png" alt="" style="width:150px; height:150px;"> </td>
                        <td colspan="2"> <h5 class="text-left"><b><p id="ket1"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <h5 class="text-left"><b><p id="ket2"></p></b></h5> </td>
                        <td> <h5 class="text-left"><b><p id="ket3"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <h5 class="text-left"><b><p id="ket4"></p></b></h5> </td>
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
                        <td colspan="2"> <h4 id="judulBc" class="text-center"></h4> </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <h5 class="text-left"><b><p id="ket1Bc"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <h5 class="text-left"><b><p id="ket2Bc"></p></b></h5> </td>
                        <td> <h5 class="text-left"><b><p id="ket3Bc"></p></b></h5> </td>
                        <!-- <td> <p id="namabrg"></p> </td> -->
                    </tr>
                    <tr>
                        <td> <p class="text-center"><img id="fotoBarcode" src="<?php echo base_url() ?>/upload/barcode/default.png" alt=""></p> </td>
                        <td> <h5 class="text-left"><b><p id="ket4Bc"></p></b></h5> </td>
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



        <!-- modal perbaikan -->
        <div class="modal" tabindex="-1" role="dialog" id="modalPerbaikan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Perbaikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <center>
                <p id="textPerbaikan"></p>
            </center>
                    <input type="hidden" id="logUsernames" name="logUsernames" value="<?php echo $username ?>">
                    <input type="hidden" id="actions" name="actions" value="menandai barang telah diperbaiki pada item">
                    <input type="hidden" name="namez" id="namez" value=""> 
                    <input type="hidden" name="idz" id="idz" value=""> 


                <div class="form-group">
                    <label for="perbaikan">Perbaikan</label>
                    <textarea  class="form-control" name="perbaikan" id="perbaikan" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_perbaikan">Konfirmasi</button>
            </div>
            </div>
        </div>
        </div>
        <!-- akhir modal perbaikan -->

        <!-- modal upgrade -->
        <div class="modal" tabindex="-1" role="dialog" id="modalUpgrade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Upgrade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <center>
                <p id="textPerbaikan"></p>
            </center>
                    <input type="hidden" id="logUsernames" name="logUsernames" value="<?php echo $username ?>">
                    <input type="hidden" id="actionx" name="actionx" value="menandai barang telah diupgrade pada item">
                    <input type="hidden" name="namex" id="namex" value=""> 
                    <input type="hidden" name="idx" id="idx" value=""> 


                <div class="form-group">
                    <label for="upgrade">Upgrade</label>
                    <textarea  class="form-control" name="upgrade" id="upgrade" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_upgrade">Konfirmasi</button>
            </div>
            </div>
        </div>
        </div>
        <!-- akhir modal upgrade -->
  
