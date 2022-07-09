<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    </script>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
</head>
<body>
    <div class="col-md-12">
    <h3>Daftar</h3>
    <table border="1"  class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>tanggal_daftar</th>
                <th>alasan</th>
                <th>users_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($daftar as $dftr){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dftr -> tanggal_daftar ?></td>
                <td><?php echo $dftr -> alasan ?></td>
                <td><?php echo $dftr -> users_id ?></td>
                </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
    
</body>
</html>