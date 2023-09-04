<?= $this->extend('admin/vw_template'); ?>


<?= $this->section('content'); ?>
<div class="container">
  <h2 class="mb-3 text-center">Tambah Makanan</h2>
  <div class="row">
    <div class="offset-md-3 col-md-6 offset-md-3">
      <form action="" method="post">

        <?php csrf_field() ?>

        <div class="form-group">
          <label for="foods_title">Nama Makanan</label>
          <input required type="text" class="form-control" name="foods_title" id="foods_title" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <div class="form-group">
          <label for="">Tipe Makanan</label>
          <select class="form-control" name="foods_title" id="foods_title">
            <option>makanan</option>
            <option>minuman</option>
          </select>
        </div>

        <div class="form-group">
          <label for="price">Harga</label>
          <input required type="text" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>