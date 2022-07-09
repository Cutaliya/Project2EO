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
<h2>Form Create Daftar</h2>
<?php echo form_open("daftar/save") ?>
  <div class="form-group row">
    <label for="tanggal_daftar" class="col-4 col-form-label">tanggal daftar</label> 
    <div class="col-8">
      <input id="tanggal_daftar" name="tanggal_daftar" placeholder="Masukkan tanggal daftar" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alasan" class="col-4 col-form-label">alasan</label> 
    <div class="col-8">
      <input id="alasan" name="alasan" placeholder="Masukkan alasan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">users id</label> 
    <div class="col-8">
      <input id="users_id" name="users_id" placeholder="Masukkan users id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kegiatan_id" class="col-4 col-form-label">Kegiatan id</label> 
    <div class="col-8">
      <input id="kegiatan_id" name="kegiatan_id" placeholder="Masukkan kegiatan id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori_peserta_id" class="col-4 col-form-label">kategori peserta id</label> 
    <div class="col-8">
      <input id="kategori_peserta_id" name="kategori_peserta_id" placeholder="Masukkan kategori peserta id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nosertifikat" class="col-4 col-form-label">nosertifikat</label> 
    <div class="col-8">
      <input id="nosertifikat" name="nosertifikat" placeholder="Masukkan nosertifikat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
</div>
</div>
<!-- /.card-body -->
              <!-- /.card-footer-->
              </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
