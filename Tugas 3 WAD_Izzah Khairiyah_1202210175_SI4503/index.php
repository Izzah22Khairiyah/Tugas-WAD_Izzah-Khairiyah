<?php

include 'connect.php';

$obat = mysqli_query($conn, "SELECT * FROM obat");

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
            alert("Apakah anda yakin ingin menghapus data obat?");
        }
    </script>
    <title>Daftar Obat Apotek</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Obat Apotek</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Produsen</th>
                    <th scope="col">Jenis Obat</th>
                    <th scope="col">Dosis (gr)</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kadaluarsa</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($obat as $row) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $row["nama_obat"]; ?></td>
                        <td><?= $row["produsen"]; ?></td>
                        <td><?= $row["jenis_obat"]; ?></td>
                        <td><?= $row["dosis"]; ?></td>
                        <td><?= $row["stok"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
                        <td><?= $row["tanggal_kadaluarsa"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row["obat_id"] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $row["obat_id"] ?>" class="btn btn-danger" onclick="alertfunction()">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="insert.php" class="btn btn-primary">Tambah Data Obat</a>
    </div>
</body>
</html>