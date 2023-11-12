<?php

include 'connect.php';

$id = $_GET['id'];
$obat = mysqli_query($conn, "SELECT * from obat WHERE obat_id=$id");
$row = mysqli_fetch_assoc($obat);

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['namaobat'];
    $produsen = $_POST['produsen'];
    $jenis = $_POST['jenisobat'];
    $dosis = $_POST['dosis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $kadaluarsa = $_POST['kadaluarsa'];

    $sql = "UPDATE obat SET nama_obat='$nama', produsen='$produsen', jenis_obat='$jenis', dosis='$dosis', stok='$stok', harga='$harga', tanggal_kadaluarsa='$kadaluarsa' WHERE obat_id=$id";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header("Location: index.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function alertfunction() {
            alert("Apakah anda yakin ingin mengubah data obat?");
        }
    </script>
    <title>Edit Data Obat</title>
</head>
<body>
    <div class="container">
        <h1>Input Data Obat</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $row['obat_id'] ?>">
            <div class="mb-3">
                <label for="namaobat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" name="namaobat" id="namaobat" required value="<?= $row["nama_obat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="produsen" class="form-label">Produsen</label>
                <input type="text" class="form-control" name="produsen" id="produsen" required value="<?= $row["produsen"]; ?>">
            </div>
            <div class="mb-3">
                <label for="jenisobat" class="form-label">Jenis Obat</label>
                <input type="text" class="form-control" name="jenisobat" id="jenisobat" required value="<?= $row["jenis_obat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="dosis" class="form-label">Dosis</label>
                <input type="number" class="form-control" name="dosis" id="dosis" required value="<?= $row["dosis"]; ?>">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok" id="stok"required value="<?= $row["stok"]; ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" required value="<?= $row["harga"]; ?>">
            </div>
            <div class="mb-3">
                <label for="kadaluarsa" class="form-label">Kadaluarsa</label>
                <input type="date" class="form-control" name="kadaluarsa" id="kadaluarsa" required value="<?= $row["tanggal_kadaluarsa"]; ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="submit" name="submit" onclick="alertfunction()">
            </div>
        </form>
    </div>
</body>
</html>