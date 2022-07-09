<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Users</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Users</h3>
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
                <th>Password</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Last login</th>
                <th>Status</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $users -> id ?></td>
                <td><?php echo $users -> username ?></td>
                <td><?php echo $users -> password ?></td>
                <td><?php echo $users -> email ?></td>
                <td><?php echo $users -> created_at ?></td>
                <td><?php echo $users -> last_login ?></td>
                <td><?php echo $users -> last_login ?></td>
                <td><?php echo $users -> status ?></td>
                <td><?php echo $users -> role ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                <img src="<?=base_url()?>upload/photos/<?=$users->id?>.jpg" width="200"/>
                    <div class="mt-4">
                    <h4><?=$users->nama?></h4>
                    <p>Foto Users</p>
                    <br/> <br/>
                    <a href="https://www.instagram.com/na.jaemin0813/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                    <br/> <br/>
                    <?php echo form_open_multipart('users/upload');?>
                    <input type="file" name="foto" size="200"/>
                    <input type="hidden" name="iddosen" value="<?=$users->id?>"/>
                    <br/> <br/>
                    <input type="submit" value="Upload Foto" class="btn btn-primary"/>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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