<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body >
    <div class="col-md-12" >
    <h3><center>Users</center></h3>
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
            <?php
            $nomor = 1;
            foreach ($users as $usr) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $usr -> username ?></td>
                <td><?php echo $usr -> password ?></td>
                <td><?php echo $usr -> email ?></td>
                <td><?php echo $usr -> created_at ?></td>
                <td><?php echo $usr -> last_login ?></td>
                <td><?php echo $usr -> status ?></td>
                <td><?php echo $usr -> role ?></td>
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