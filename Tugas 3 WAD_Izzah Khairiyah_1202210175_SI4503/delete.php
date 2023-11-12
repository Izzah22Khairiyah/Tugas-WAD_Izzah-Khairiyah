<?php

include 'connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM obat WHERE obat_id=$id";
$query = mysqli_query($conn, $sql);

if($query) {
    header("Location: index.php");
}