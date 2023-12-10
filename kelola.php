<!DOCTYPE html>
<?php
    include 'koneksi.php';
    $id_mhs = '';
    $npm = '';
    $nama = '';
    $alamat = '';

    if(isset($_GET['ubah'])){ 
        $id_mhs = $_GET['ubah'];
        
        $query = "SELECT * FROM mhs_tb WHERE mhs_tb.id_mhs = '$id_mhs';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $npm = $result['npm'];
        $nama = $result['nama_mhs'];
        $alamat = $result['alamat'];
        //var_dump($result);
        //die();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>crud-aplication</title>
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <form action="proses.php" method="POST">
            <input type="hidden" value="<?php echo $id_mhs; ?>" name ="id_mhs">
            <div class="mb-3 row">
                <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-10">
                    <input type="text" name="npm" class="form-control" value="<?php echo $npm; ?>" id="inputNPM">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNAMA" class="col-sm-2 col-form-label">NAMA MAHASISWA</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_mhs" class="form-control" value="<?php echo $nama; ?>"id="inputNAMA">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputALAMAT" class="col-sm-2 col-form-label">ALAMAT</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name = "alamat" id="exampleFormControlTextarea1" rows="3"><?php echo $alamat; ?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col mt-5">
                    <?php
                        if(isset($_GET['ubah'])){ 
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-outline-success">
                            <i class="bi bi-floppy2"></i> SIMPAN PERUBAHAN
                        </button>
                    <?php
                        }else{
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-outline-success">
                            <i class="bi bi-plus-square-fill"></i> TAMBAHKAN DATA
                        </button>
                    <?php
                        }
                    ?>
    
                    <a href="index.php" type="button" class="btn btn-outline-danger">
                        BATAL
                    </a>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>