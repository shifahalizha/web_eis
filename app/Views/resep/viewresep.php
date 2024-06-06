<!DOCTYPE html>
<html>

<head>
    <?= $this->include('layout/head') ?>
</head>

<div>
    <nav class="navbar navbar-light" style="background-color: #e83e8c;">
        <span class="navbar-brand mb-0 h1 text-white">
            <?php echo $data['namamenu']; ?>
        </span>
    </nav>

    <div class="container pt-5">
        <div>
            <img src="/images/<?php echo $data['foto']; ?>" alt="<?= $data['namamenu'] ?>" width="500px">
            <br />
            <?php echo $data['caption']; ?>
            <h2 style="font-size: 15px" class="pt-5">bahan-bahan yang diperlukan</h2>
            <p><?php echo nl2br($data['bahan']); ?></p>
            <!-- Menggunakan nl2br() untuk mengubah baris baru menjadi tag <br> -->
            <h2 style="font-size: 15px">cara membuat</h2>
            <p><?php echo nl2br($data['cara']); ?></p>
            <!-- Menggunakan nl2br() untuk mengubah baris baru menjadi tag <br> -->

        </div>
        <div>
            <a href="/resep">
                Kembali
            </a>
        </div>
    </div>

</div>