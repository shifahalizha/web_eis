<!DOCTYPE html>
<html>

<head>
    <?= $this->include('layout/head') ?>
</head>

<div>
    <form action="/resep" method="post">>
        <nav class="navbar navbar-light" style="background-color: #7E30E1">
            <span class="navbar-brand mb-0 h1 text-white">
                <?= $recipes->nama_menu ?>
            </span>
        </nav>

        <div class="container pt-5">
            <div>
                <img src="<?php echo $item['foto']; ?>" alt="<?= $recipe['nama_menu'] ?>" width="500px">
                <h2 style="font-size: 15px" class="pt-5">bahan-bahan yang diperlukan</h2>
                <?php echo $item['bahan']; ?>
                <h2 style="font-size: 15px">cara membuat</h2>
                <?php echo $item['cara']; ?>

            </div>
        </div>
    </form>
</div>