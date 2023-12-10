<?php
include 'koneksi.php';

$query = "SELECT * FROM mhs_tb;";
$sql = mysqli_query($conn, $query);
$no = 0;


session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>crud-aplication</title>
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"> crud application </h1>
        </div>
    </div>
    <div class="container">
        <a href="kelola.php" type="button" class="btn btn-primary"><i class="bi bi-plus-square"></i> ADD DATA</a>
    </div>
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>NPM</th>
                        <th>NAMA MAHASISWA</th>
                        <th>ALAMAT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($result = mysqli_fetch_assoc($sql)){
                ?>
                    <tr>
                        <td><center>
                            <?php
                                echo ++$no;           
                            ?>.
                        </center></td>
                        <td><?php echo $result['npm']; ?></td>
                        <td><?php echo $result['nama_mhs']; ?></td>
                        <td><?php echo $result['alamat']; ?></td>
                        <td class="text-center">
                            <a href="kelola.php?ubah=<?php echo $result['id_mhs']; ?>" type="button" class="btn btn-outline-warning btn-sm" ><i class="bi bi-pencil-square"></i> EDIT</a>
                            <a href="proses.php?detele=<?php echo $result['id_mhs']; ?>" type="button" class="btn btn-outline-danger btn-sm" onClick="return confirm('APAKAH ANDA YAKIN UNTUK MENGHAPUSNYA??')" ><i class="bi bi-trash3-fill"></i> DELETE</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>