<!DOCTYPE html>
<html>

<head>
    <?= $this->include('layout/head') ?>
</head>

<body>
    <form action="/resep" method="post" enctype="multipart/form-data">
        <label for="name">Nama Menu</label>
        <br />
        <input type="text" id="namamenu" placeholder="Input product name" name="namamenu" />

        <br />
        <br />
        <label for="stock">Berikan Caption</label>
        <br />
        <input type="text" id="caption" placeholder="Input caption" name="caption" />
        <br />
        <br />
        <label for="price">Bahan-Bahan</label>
        <br />
        <input type="text" id="bahan" placeholder="Input Ingridients" name="bahan" /> <br />
        <br />
        <label for="category">Langkah-Langkah</label>
        <br />
        <input type="text" id="cara" placeholder="Input intructions" name="cara" />
        <br />
        <br />
        <div class="custom-file">
            <label for="category">Foto</label>
            <br />
            <input type="file" class="custom-file-input" id="foto" name="foto"> 
        </div>

        <br />
        <br />
        <button type="submit">Submit</button>
    </form>
</body>