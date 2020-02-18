<?php
    
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Barang Baru</h1>
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
            <div class="card-header bg-success">
                <h5 class='text-left'>Daftar Barang Baru</h1>
            </div>
            <div class="card-body">
                <div class="" id="reload">
                    <table class="table display nowrap dataTable dtr-inline collapsed" id="tableBarangBaru">
                        <thead>
                        <tr align='left'>
                            <th width="20">No</th>
                            <th width="20">id</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Nomor Seri</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th>Spec</th>
                            <th>Foto</th>
                            <th>Tanggal</th>
                            <th width="50">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_brg_baru">
                        
                        </tbody>
                        <tfoot>
                        <tr align="left">
                            <th>No</th>
                            <th>id</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Nomor Seri</th>
                            <th>Jumlah</th>
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
</div>




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
            <input type="hidden" id="kodes" name="kodes">
            <div class="form-group">
                <label for="namas">Nama</label>
                <input type="text" class="form-control" placeholder="Nama Barang" id="namas" name="namas">
            </div>
            <div class="form-group">
                <label for="jeniss">Jenis</label>
                <select class="custom-select" required id="jeniss" name="jeniss">
                <option value="">Jenis Barang</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Non Elektronik">Non Elektronik</option>
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
                <label for="jumlahs">Jumlah</label>
                <input type="text" class="form-control" placeholder="Jumlah Barang" id="jumlahs" name="jumlahs">
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



<!--Modal Upload Foto-->
<div class="modal" tabindex="-1" role="dialog" id="modalFoto">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="submit">
            <input type="hidden" id="logUsername" name="logUsername" value="<?php echo $username ?>">
            <input type="hidden" id="action" name="action" value="menambahkan foto pada item">
            <input type="hidden" name="nama" id="nama" value=""> 
            <input type="hidden" name="id" id="id" value=""> 
            <br>
            <p>Tambahkan foto untuk item ini?</p>
              <div class="form-group">
                <label for="foto">Foto (jpg|png|jpeg)</label>
                <input type="file" name="foto" id="foto">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" id="btn_upload">Upload</button>
            </form>
      </div>
    </div>
  </div>
</div>
<!--END Modal Upload Foto-->

<!--Modal Register Barang-->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <input type="hidden" id="logUsernames" name="logUsernames" value="<?php echo $username ?>">
            <input type="hidden" id="actions" name="actions" value="melakukan registrasi pada item">
            <input type="hidden" name="namas" id="namas" value=""> 
            <input type="hidden" name="ids" id="ids" value=""> 

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
        <button type="button" class="btn btn-primary" id="btn_register">Register Barang</button>
      </div>
    </div>
  </div>
</div>
<!--END Modal Register Barang-->





