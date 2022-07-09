<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <script>
        function hapususers(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body >
    <div class="col-md-12" >
    <?php
    $username = $this->session->userdata('username');
    if($username){
        echo "<h2>Selamat datang $username</h2>";
    }
    ?>
    <h3><center>Users</center></h3>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-4">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Users</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Last login</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($users as $usr) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $usr -> username ?></td>
                <td><?php echo $usr -> email ?></td>
                <td><?php echo $usr -> last_login ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/users/detail/$usr->id")?>" class="btn btn-primary btn-lg active" >Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/users/edit/$usr->id")?> class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/users/delete/$usr->id")?> class="btn btn-danger btn-lg active" onclick="return hapususers('Anda yakin ingin menghapus users yang bernama <?php echo $usr->username?>') " >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    &nbsp;
                    <a href= <?php echo base_url("index.php/users/form/$usr->id")?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
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
</body>
</html>