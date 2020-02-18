<?php
    $username = $uname;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Perencanaan Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perencanaan </li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->


        <br>
        
        <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambah"><span class="fa fa-plus"></span> Tambahkan Barang</a></div>
        <br>
        
        <div class="card">
            <div class="card-header bg-info">
                <h5 class='text-left'>Daftar Perencanaan Barang</h1>
            </div>
            <div class="card-body">
                <div class="" id="reload">
                    <table class="table display nowrap dataTable dtr-inline collapsed" id="tableBarangPerencanaan">
                        <thead>
                        <tr align='left'>
                            <th width="20">No</th>
                            <th width="20">id</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Nomor Seri</th>
                            <th>Harga</th>
                            <!-- <th>Jumlah</th> -->
                            <th>Keterangan</th>
                            <th>Spec</th>
                            <th>Tanggal</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_brg_perencanaan">
                        
                        </tbody>
                        <tfoot>
                        <tr align="left">
                            <th width="50">No</th>
                            <th>id</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Nomor Seri</th>
                            <th>Harga</th>
                            <!-- <th>Jumlah</th> -->
                            <th>Keterangan</th>
                            <th>Spec</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
</div>

<!-- modal tambah barang -->
<div class="modal" tabindex="-1" role="dialog" id="modalTambah">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambahkan Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <!-- data log -->
            <input type="hidden" id="logUsername" name="logUsername" value="<?php echo $username ?>">
            <!-- akhir data log -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" placeholder="Nama Barang" id="nama" name="nama" required>
                
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select class="custom-select" required id="jenis" name="jenis" required>
                <option value="">Jenis Barang</option>
                <option value="GPS">GPS</option>
                <option value="Komputer">Komputer</option>
                <option value="Laptop">Laptop</option>
                <option value="Monitor">Monitor</option>
                <option value="Printer">Printer</option>
                <option value="Proyektor">Proyektor</option>
                <option value="Scanner">Scanner</option>
                <option value="UPS">UPS</option>
                
                <option value="Lain-Lain">Lain-Lain</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <input type="text" class="form-control" placeholder="Merek" id="merek" name="merek" required>
            </div>
            <div class="form-group">
                <label for="seri">No Seri</label>
                <input type="text" class="form-control" placeholder="Nomor Seri Barang" id="seri" name="seri" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" placeholder="Harga Barang" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" placeholder="Jumlah Barang" id="jumlah" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" placeholder="Keterangan" id="keterangan" name="keterangan" required>
            </div>
            <div class="form-group">
                <label for="spec">Spesifikasi</label>
                <textarea name="spec" id="spec" cols="30" rows="5" class="form-control" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal tambah barang -->


<!-- modal edit barang -->
<div class="modal" tabindex="-1" role="dialog" id="modalEdit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <p>Modal body text goes here.</p> -->
        <form>

            <!-- data log -->
            <input type="hidden" id="logUsername" name="logUsername" value="<?php echo $username ?>">
            <!-- akhir data log -->
            <input type="hidden" id="kodes" name="kodes">
            <div class="form-group">
                <label for="namas">Nama</label>
                <input type="text" class="form-control" placeholder="Nama Barang" id="namas" name="namas">
            </div>
            <div class="form-group">
                <label for="jeniss">Jenis</label>
                <select class="custom-select" required id="jeniss" name="jeniss">
                <option value="">Jenis Barang</option>
                <option value="GPS">GPS</option>
                <option value="Komputer">Komputer</option>
                <option value="Laptop">Laptop</option>
                <option value="Monitor">Monitor</option>
                <option value="Printer">Printer</option>
                <option value="Proyektor">Proyektor</option>
                <option value="Scanner">Scanner</option>
                <option value="UPS">UPS</option>
                <option value="Lain-Lain">Lain-Lain</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div class="form-group">
                <label for="mereks">Merek</label>
                <input type="text" class="form-control" placeholder="Merek" id="mereks" name="mereks">
            </div>
            <div class="form-group">
                <label for="seris">No Seri</label>
                <input type="text" class="form-control" placeholder="Nomor Seri Barang" id="seris" name="seris">
            </div>
            <div class="form-group">
                <label for="hargas">Harga</label>
                <input type="text" class="form-control" placeholder="Harga Barang" id="hargas" name="hargas">
            </div>
            <div class="form-group">
                <!-- <label for="jumlahs">Jumlah</label> -->
                <input type="hidden" class="form-control" placeholder="Jumlah Barang" id="jumlahs" name="jumlahs">
            </div>
            <div class="form-group">
                <label for="keterangans">Keterangan</label>
                <input type="text" class="form-control" placeholder="Keterangan" id="keterangans" name="keterangans">
            </div>
            <div class="form-group">
                <label for="specs">Spesifikasi</label>
                <textarea name="specs" id="specs" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn_update">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal edit barang -->



<!--MODAL HAPUS-->
<div class="modal" tabindex="-1" role="dialog" id="modalHapus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="logUsername" name="logUsername" value="<?php echo $username ?>"> 
            <input type="hidden" name="nm" id="textnm" value="">
            <input type="hidden" name="id" id="textid" value=""> 
            <br>
            <!-- <p>Item <input type="text" name="nama" value=""> akan dihapus, lanjutkan?</p> -->
            <textarea name="nama" value="" cols="55" rows="1" style="border : none;"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="btn_hapus">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!--END MODAL HAPUS-->



<!--MODAL ACC-->
<div class="modal" tabindex="-1" role="dialog" id="modalAcc">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Persetujuan Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <p>Item <input type="text" name="nama" value=""> akan dihapus, lanjutkan?</p> -->
            <!-- <textarea name="nama" value="" cols="55" rows="1" style="border : none;"></textarea> -->
            <p>Item dengan keterangan dibawah akan disetujui, lanjutkan?</p>
            <!-- hidden -->
            <form>
            <input type="hidden" id="logUsername" name="logUsername" value="<?php echo $username ?>">
                <input type="hidden" id="kodex" name="kodex">
                <div class="form-group">
                    <label for="namax">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama Barang" id="namax" name="namax" disabled>
                </div>
                <div class="form-group">
                    <label for="jenisx">Jenis</label>
                    <!-- <select class="custom-select" required id="jenisx" name="jenisx">
                    <option value="">Jenis Barang</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Non Elektronik">Non Elektronik</option>
                    <option value="Lain-Lain">Lain-Lain</option>
                    </select> -->
                    <input type="text" id="jenisx" name="jenisx" disabled class="form-control">
                    <!-- <div class="invalid-feedback">Example invalid custom select feedback</div> -->
                </div>
                <div class="form-group">
                    <label for="merekx">Merek</label>
                    <input type="text" class="form-control" placeholder="Merek" id="merekx" name="merekx" disabled>
                </div>
                <div class="form-group">
                    <label for="serix">No Seri</label>
                    <input type="text" class="form-control" placeholder="Nomor Seri Barang" id="serix" name="serix" disabled>
                </div>
                <div class="form-group">
                    <label for="hargax">Harga</label>
                    <input type="text" class="form-control" placeholder="Harga Barang" id="hargax" name="hargax" disabled>
                </div>
                <div class="form-group">
                    <!-- <label for="jumlahx">Jumlah</label> -->
                    <input type="hidden" class="form-control" placeholder="Jumlah Barang" id="jumlahx" name="jumlahx" disabled>
                </div>
                <div class="form-group">
                    <label for="keteranganx">Keterangan</label>
                    <input type="text" class="form-control" placeholder="Keterangan" id="keteranganx" name="keteranganx" disabled>
                </div>
                <div class="form-group">
                    <label for="specx">Spesifikasi</label>
                    <textarea name="specx" id="specx" cols="30" rows="5" class="form-control" disabled></textarea>
                </div>
            </form>
            <!-- /hidden -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="btn_acc">Konfirmasi</button>
      </div>
    </div>
  </div>
</div>
<!--END MODAL ACC-->



