<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategoripeserta</title>
<body>
    <div class="col-md-12">
    <h3>Kategoripeserta</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($Kategori_peserta as $kaserta) {
            ?>
            <tr>
                <td><?php echo $kaserta -> id ?></td>
                <td><?php echo $kaserta -> nama ?></td>
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