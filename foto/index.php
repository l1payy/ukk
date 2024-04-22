<?php
include_once "../inc/header.php";
require_once "../koneksi.php";


if (auth() == false) {
   header("Location: index.php");
}

$user = $_SESSION["user"]["userId"];

$fotos = read("SELECT * FROM foto WHERE userId = '$user'");


?>

<div class="row justify-content-center mt-5 display-3">
    FOTO-FOTO
</div>

<div class="container mt-5 mb-4">
    <a href="create.php" class="btn btn-primary">Upload</a>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th class="float-end">CURUD</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($fotos as $foto): ?>
                <tr>
                   <td><?= $i++; ?></td>
                   <td><?= $foto['judul']; ?></td>
                   <td><?= $foto['deskripsi']; ?></td>
                   <td><?= $foto['tanggal']; ?></td>
                   <td><img src="../image/<?= $foto['lokasi']; ?>" width="100" class="img-thumbnail rounded" alt=""></td>
                    <td class="float-end">
                        <a href="edit.php?id=<?= $foto['fotoId']; ?>" class="btn btn-primary">Edit</a>
                        <a href="hapus.php?id=<?= $foto['fotoId']; ?>" class="btn btn-danger" onclick="return confirm('are you sure')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>  

