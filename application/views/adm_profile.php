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
        
        <center>
        <div class="card" style="width:500px;">
        <div class="card-header bg-info">
            Ganti Password
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?php echo $idUser ?>">
                <label for="pwlama">Password Lama</label>
                <input type="password" name="pwlama" class="form-control" id="pwlama">
            </div>
            <div class="form-group">
                <label for="pwbaru">Password Baru</label>
                <input type="password" name="pwbaru" class="form-control" id="pwbaru">
            </div>
            <button type="submit" id="btn_ganti" class="btn btn-info">Ganti Password</button>
        </div>
        </div>
        </center>