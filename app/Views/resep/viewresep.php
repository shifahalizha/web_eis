<!DOCTYPE html>
<html>

<head>
    <?= $this->include('layout/head') ?>
</head>

<div>
        <nav class="navbar navbar-light" style="background-color: #7E30E1">
            <span class="navbar-brand mb-0 h1 text-white">
                <?php echo $data['namamenu']; ?>
            </span>
        </nav>

        <div class="container pt-5">
            <div>
                <img src="/images/<?php echo $data['foto']; ?>" alt="<?= $data['namamenu'] ?>" width="500px">
                <h2 style="font-size: 15px" class="pt-5">bahan-bahan yang diperlukan</h2>
                <?php echo $data['bahan']; ?>
                <h2 style="font-size: 15px">cara membuat</h2>
                <?php echo $data['cara']; ?>

            </div>
        </div>
</div>