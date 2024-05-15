<!DOCTYPE html>
<html>

<head>
  <?= $this->include('layout/head') ?>
</head>
<?= $this->section('content') ?>
<body>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update menu <?= $data['namamenu'] ?></h5>

            <form action="/resep/<?= $data['id'] ?>" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-name">Nama menu</label>
                    <input type="text" class="form-control" id="example-menu-name" aria-describedby="emailHelp" 
                        placeholder="Enter nama menu" required name="namamenu" value="<?= $data['namamenu'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Caption</label>
                    <input type="text" class="form-control" id="example-caption" aria-describedby="emailHelp" 
                        placeholder="Enter caption" required name="caption" value="<?= $data['caption'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Bahan-bahan</label>
                    <input type="text" class="form-control" id="example-ingridiens" aria-describedby="emailHelp" 
                        placeholder="Enter bahan-bahan" required name="bahan" value="<?= $data['bahan'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Langkah-langkah</label>
                    <input type="text" class="form-control" id="example-instruction" aria-describedby="emailHelp" 
                        placeholder="Enter cara-cara" required name="cara" value="<?= $data['cara'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-name">foto</label>
                    <input type="text" class="form-control" id="example-photo" aria-describedby="emailHelp" 
                        placeholder="Enter foto" required name="foto" value="<?= $data['foto'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
<?= $this->endSection() ?>