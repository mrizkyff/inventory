<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User dan Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>
        
        <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambah"><span class="fa fa-plus"></span> Tambahkan User</a></div>
        <br>
        
        <div class="card">
            <div class="card-header bg-secondary">
                <h5 class='text-left text-light'>Daftar User</h1>
            </div>
            <div class="card-body">
                <div class="" id="reload">
                    <table class="table display nowrap dataTable dtr-inline collapsed" id="tableUserList">
                        <thead>
                        <tr align='left'>
                            <th width="20">No</th>
                            <th width="20">id</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Tanggal</th>
                            <th width="50">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_user_list">
                        
                        </tbody>
                        <tfoot>
                        <tr align="left">
                            <th>No</th>
                            <th>id</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>

        <!-- modal tambah user -->
        <div class="modal" tabindex="-1" role="dialog" id="modalTambah">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="kodes" name="kodes">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" placeholder="Nomor Induk Pegawai" id="nip" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="custom-select" required id="level" name="level" required>
                        <option value="">Level</option>
                        <option value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                        </select>
                        <!-- <div class="invalid-feedback">Example invalid custom select feedback</div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn_simpan_user">Simpan</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- akhir modal tambah user -->


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


        <!-- modal edit barang -->
        <div class="modal" tabindex="-1" role="dialog" id="modalEdit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <p>Modal body text goes here.</p> -->
                <form>
                    <div class="form-group">
                        <label for="namas">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" id="namas" name="namas" required>
                    </div>
                    <div class="form-group">
                        <label for="nips">NIP</label>
                        <input type="text" class="form-control" placeholder="Nomor Induk Pegawai" id="nips" name="nips" required>
                    </div>
                    <div class="form-group">
                        <label for="usernames">Username</label>
                        <input type="text" class="form-control" placeholder="Username" id="usernames" name="usernames" required>
                    </div>
                    <div class="form-group">
                        <label for="passwords">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="passwords" name="passwords" required>
                    </div>
                    <div class="form-group">
                        <label for="levels">Level</label>
                        <select class="custom-select" required id="levels" name="levels" required>
                        <option value="">Level</option>
                        <option value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                        </select>
                        <!-- <div class="invalid-feedback">Example invalid custom select feedback</div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn_simpan_user">Simpan</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- akhir modal edit barang -->
