<!DOCTYPE html>
<html>

<head>
    <?= $this->include('layout/head') ?>
</head>


<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <form action="/resep" method="post" enctype="multipart/form-data">
                <label for="name">Nama Menu</label>
                <br />
                <input type="text"  class="form-control" id="namamenu" placeholder="Input product name" name="namamenu" />

                <br />
                <label for="stock">Berikan Caption</label>
                <br />
                <input type="text" class="form-control" id="caption" placeholder="Input caption" name="caption" />
                <br />
                <label for="price">Bahan-Bahan</label>
                <br />
                <input type="text" class="form-control" id="bahan" placeholder="Input Ingridients" name="bahan" /> <br />
                
                <label for="category">Langkah-Langkah</label>
                <br />
                <input type="text" class="form-control" id="cara" placeholder="Input intructions" name="cara" />
                <br />

                <label for="category">Foto</label>
                <br />

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto">
                    <label class="custom-file-label" for="foto">Choose file</label>
                </div>

                <br />
                <br />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>