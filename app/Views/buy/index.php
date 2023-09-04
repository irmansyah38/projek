<?= $this->extend('layout/template'); ?>


<?= $this->section("content"); ?>

<br>
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Generate Barcode</h2>
      <form action="/proses" method="post">
        <div class="form-group">
          <label for="jumlah_orang">Jumlah Orang</label>
          <input type="number" class="form-control" name="jumlah_orang" id="jumlah_orang" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>