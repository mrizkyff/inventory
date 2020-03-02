<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Summary</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Summary</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>
        
        <!-- <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambah"><span class="fa fa-plus"></span> Tambahkan Barang</a></div> -->
        <br>
        

            <div class="card">  
            <div class="card-header bg-secondary">
                <h5 class='text-left text-light'>Daftar Rangkuman Barang</h1>
            </div>
            <div class="card-body">
                <div class="" id="reload">
                

                    <table class="table display nowrap dataTable dtr-inline collapsed" id="tableBarangRangkuman">
                        <thead>
                        <tr align='left'>
                            <th width="50">No</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Bagian</th>
                            <th>Sub Bagian</th>
                            <th>Kode Register</th>
                            <th width="100">Foto</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="show_brg_rangkuman">
                        
                        </tbody>
                        <tfoot>
                        <tr align="left">
                            <th width="50">No</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Bagian</th>
                            <th>Sub Bagian</th>
                            <th>Kode Register</th>
                            <th>Foto</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>

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