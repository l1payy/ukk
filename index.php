<?php
include_once "inc/header.php";
require_once "koneksi.php";

if ($_SESSION["user"] == false) {
    header("Location: login.php");
}

$query = "SELECT * FROM foto WHERE fotoId";
$result = mysqli_query($conn, $query);

if (auth() == false) {
    header("Location: index.php");
}

$user = $_SESSION["user"]["userId"];

$fotos = read("SELECT * FROM foto WHERE userId = '$user'");

?>

<div class="row">
    <?php foreach ($fotos as $foto): ?>
        <div class="col-3">
            <div class="card">
                <img src="../image/<?= $foto['lokasi']; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title"><?= $foto["judul"] ?></h3>
                    <div class="card-text"><?= $foto["deskripsi"] ?></div>
                </div>
                <div class="card-footer"><?= $foto["tanggal"] ?></div>

            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>

