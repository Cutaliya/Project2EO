<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/daftar/index')?>">Daftar</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Input kegiatan Pameran Lukisan</h2>
<br>
<?php echo form_open("kegiatan/save") ?>
  <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">Judul</label> 
    <div class="col-8">
      <input id="judul" name="judul" placeholder="Masukkan judul" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kapasitas" class="col-4 col-form-label">Kapasitas</label> 
    <div class="col-8">
      <input id="kapasitas" name="kapasitas" placeholder="Masukkan kapasitas" type="text" class="form-control">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
      <input id="harga_tiket" name="harga_tiket" placeholder="Masukkan harga_tiket" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tema" class="col-4 col-form-label">Tema</label> 
    <div class="col-8">
      <input id="tema" name="tema" placeholder="Masukkan tema" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat</label> 
    <div class="col-8">
      <input id="tempat" name="tempat" placeholder="Masukkan tempat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="pic" class="col-4 col-form-label">Pic</label> 
    <div class="col-8">
      <input id="pic" name="pic" placeholder="Masukkan pic" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="foto_lukisan" class="col-4 col-form-label">Foto Lukisan</label> 
    <div class="col-8">
      <input id="foto_lukisan" name="foto_lukisan" placeholder="Masukkan foto_lukisan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_id" class="col-4 col-form-label">Jenis Id</label> 
    <div class="col-8">
      <input id="jenis_id" name="jenis_id" placeholder="Masukkan jenis_id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
<!-- /.card-body -->
<div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>