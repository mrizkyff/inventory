<?php
    $perencanaan = $jumlah[0];
    $baru = $jumlah[1];
    $register = $jumlah[2];
    $rusak = $jumlah[3];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->

    <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $perencanaan ?></h3>
                  <p>Perencanaan Barang</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo base_url('Administrator/brg_perencanaan') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo $baru ?><sup style="font-size: 20px"></sup></h3>

                  <p>Barang Baru</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
                <a href="<?php echo base_url('Administrator/brg_baru') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $register ?></h3>

                  <p>Register Barang</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pricetags"></i>
                </div>
                <a href="<?php echo base_url('Administrator/brg_reg') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $rusak ?></h3>

                  <p>Barang Rusak</p>
                </div>
                <div class="icon">
                  <i class="ion ion-md-construct"></i>
                </div>
                <a href="<?php echo base_url('Administrator/brg_rusak') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  

      <!-- card log system -->
      <div class="card">
        <div class="card-header bg-primary">
          Log System
        </div>
        <div class="card-body">
          <table id="tableLogSys" class="table display nowrap dataTable dtr-inline collapsed">
            <thead>
              <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Activity</th>
                <th>id Barang</th>
                <th>Item</th>
                <th>id User</th>
                <th>Username</th>
                <th>Tanggal</th>
              </tr>
            <tbody id="show_logSys">
            </tbody>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Activity</th>
                <th>id Barang</th>
                <th>Item</th>
                <th>id User</th>
                <th>Username</th>
                <th>Tanggal</th>
              </tr>
            </tfoot>
            </thead>
          </table>
        </div>
      </div>
      <!-- akhir card log system -->
  
