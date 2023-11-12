<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['namaobat'];
    $produsen = $_POST['produsen'];
    $jenis = $_POST['jenisobat'];
    $dosis = $_POST['dosis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $kadaluarsa = $_POST['kadaluarsa'];

    $sql = "INSERT INTO obat (nama_obat, produsen, jenis_obat, dosis, stok, harga, tanggal_kadaluarsa) VALUES ('$nama', '$produsen', '$jenis', '$dosis', '$stok', '$harga', '$kadaluarsa')";
    $query = mysqli_query($conn, $sql);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Input Data Obat</title>
</head>
<body>
    <div class="container">
        <h1>Input Data Obat</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="namaobat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" name="namaobat" id="namaobat" required>
            </div>
            <div class="mb-3">
                <label for="produsen" class="form-label">Produsen</label>
                <input type="text" class="form-control" name="produsen" id="produsen" required>
            </div>
            <div class="mb-3">
                <label for="jenisobat" class="form-label">Jenis Obat</label>
                <input type="text" class="form-control" name="jenisobat" id="jenisobat" required>
            </div>
            <div class="mb-3">
                <label for="dosis" class="form-label">Dosis</label>
                <input type="number" class="form-control" name="dosis" id="dosis" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok" id="stok" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" required>
            </div>
            <div class="mb-3">
                <label for="kadaluarsa" class="form-label">Kadaluarsa</label>
                <input type="date" class="form-control" name="kadaluarsa" id="kadaluarsa" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="container">
        <?php if(isset($_POST['submit'])) : ?>
            <?php if( $query ) : ?>
                <div class="alert alert-success" role="alert">
                    Obat Berhasil Ditambahkan!
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Obat gagal ditambahkan!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Tampilkan Daftar Obat</a>
    </div>
</body>
</html>